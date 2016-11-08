<?php
    class DataCollector {
        protected $database_name;
      	protected $server;
      	protected $username;
      	protected $password;
      	protected $charset;
      	protected $option;

            public function __construct($params){
                $dsn = '';

                foreach ($params as $option => $value){
                    $this->$option = $value;
                }

                $dsn = "mysql:host=$this->server;
                        dbname=$this->database_name;
                        charset=$this->charset";

                $opt = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];

                $this->pdo = new PDO($dsn,
                                     $this->username,
                                     $this->password,
                                     $opt);
            }

            public function insert($table, $data){
                foreach ($data as $key => $value){
                    $columns[] = $key;
                    $values[] = $this->fn_quote($key, $value);
                }

               $this->pdo->exec('INSERT INTO '.$table.' (' .implode(', ', $columns). ')
                                VALUES (' .implode($values, ', '). ')');
            }

            public function delete($table, $where){
                return $this->pdo->exec('DELETE FROM '.$table.' WHERE '.$where);
            }

            public function update($table, $data, $where){
                $fields = array();

                foreach ($data as $key => $value){
                    $column = $key;
                    $fields[] = $column.' = '.$this->fn_quote($key, $value);
                }

                return $this->pdo->exec('UPDATE '.$table.' SET ' . implode(', ', $fields) . ' WHERE '.$where);
            }

            public function select($columns, $table, $where=null){
            		$stack = array();

                if($where===null)
                {
            		    $data = $this->pdo->query('SELECT '.implode(',', $columns).' FROM '.$table);
                }
                else {
                  $data = $this->pdo->query('SELECT '.implode(',', $columns).' FROM '.$table.' WHERE '.$where);
                }

                while ($row = $data->fetch()){
                    $stack[] = $row;
                }

            		return $stack;
            }

            //UTILS
            public function quote($string){ return $this->pdo->quote($string); }

            protected function fn_quote($column, $string){
        		return (strpos($column, '#') === 0 && preg_match('/^[A-Z0-9\_]*\([^)]*\)$/', $string)) ? $string : $this->quote($string);
      	}
    }
?>
