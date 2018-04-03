<?php

/* 12/08/17
 * Liyo Paul
 */

class Database extends PDO {

    public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS) {
        parent::__construct($DB_TYPE . ':host=' . $DB_HOST . ';dbname=' . $DB_NAME, $DB_USER, $DB_PASS);
    }

    /**
     * 
     * @param string $sql
     * @param array $array
     * @param mixed $fetchMode
     */
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC) {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }

    /**
     * 
     * @param string $sql
     * @param array $array
     * @param mixed $fetchMode
     */
    public function exec($qry) {
        $this->setAttribute(parent::ATTR_EMULATE_PREPARES, false);
        $sth = $this->prepare($qry);
        //  $this->queryErrorLog('bogus sql', "fdfd");
        //$stmt = $this->prepare('bogus sql');
      if (!$sth->execute()) {
            $qry = $sth->queryString;
            foreach ($data as $key => $value) {
                $qry = str_replace(":$key", "\'" . $value . "\'", $qry);
            }
            $this->queryErrorLog($qry, $this->errorInfo());
        }
    }
}