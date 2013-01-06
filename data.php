<?php

class baseObj {
    public $mysql = null;
  	private $table = null;

    public function __construct ()
    {
        $this->mysql = new mysqli("localhost", "root", "root123", "data"); /* fill in with mysql connection details */
        if ($this->mysql->connect_errno) {
            echo "Failed to connect to MySQL: (" . $this->mysql->connect_errno . ") " . $this->mysql->connect_error;
        }
    }

    //public function get ($id, $field) /* add $table parameter */ 
	public function get ($id, $field, $table)
    {
        return $this->mysql->query("SELECT $field FROM $table WHERE ID = $id");
    }

    public function getAll ($id, $table) /* add $table parameter */
    {
        $res = $this->mysql->query("SELECT * FROM $table WHERE ID = $id");
        return $res->fetch_assoc();
    }
}

class propertyData extends baseObj {
    public $id = null;
    public $type = null;
    public $title = null;
    public $address = null;
    public $bedroom = null;
    public $livingroom = null;
    public $diningroom = null;
    //protected $hdbblock = null; /* change to public variable */
	public $hdbblock = null;
    //private $swimmingPool = null; /* change to public variable */
	public $swimmingPool = null; 

    //private $table = 'Property'; /* change to public variable */
	public $table = 'Property';

    //public function getType ($ID) { $Type = $this->get( $ID, 'Type'); return $Type; } /* add $table parameter */
	public function getType ($ID) { $Type = $this->get( $ID, 'Type', $table); return $Type; }
	// public function getTitle ($ID) { $Title = $this->get( $ID, 'Title') ; return $Type;} /* add $table parameter */
    public function getTitle ($ID) { $Title = $this->get( $ID, 'Title', $table) ; return $Type;}
    // public function getAddress ($ID) { $Address = $this->get( $ID, 'Address') ; return $Address;} /* add $table parameter */
	public function getAddress ($ID) { $Address = $this->get( $ID, 'Address', $table) ; return $Address;}
    // public function getBedroom ($ID) { $Bedroom = $this->get( $ID, 'Bedroom') ; return $Bedroom;} /* add $table parameter */
	public function getBedroom ($ID) { $Bedroom = $this->get( $ID, 'Bedroom', $table) ; return $Bedroom;}
    // public function getLivingroom ($ID) { $livingroom = $this->get( $ID, 'Living_room') ; return $livingroom;} /* add $table parameter */
	public function getLivingroom ($ID) { $livingroom = $this->get( $ID, 'Living_room', $table) ; return $livingroom;}
    // public function getDiningroom ($ID) { $diningroom = $this->get( $ID, 'Diningroom', $table) ; return $diningroom;} /* add $table parameter */
	public function getDiningroom($ID) { $diningroom = $this->get( $ID, 'Diningroom', $table) ; return $diningroom;}
}

class hdbData extends propertyData {
    //private $table = 'HDB'; /* change to public variable */
	public $table = 'hdb';
	// public function getHDBBlock ($ID) { $this->hdbblock = $this->get($ID, 'HDBBlock'); return $this->hdbblock; } /* add $table parameter */
    public function getHDBBlock ($ID) { $this->hdbblock = $this->get($ID, 'HDBBlock', $table); return $this->hdbblock; }
}

class condoData extends propertyData {
    //private $table = 'ConDO';  /* change to public variable */
	public $table = 'condo'; 
	public function gotSwimmingPool ($ID)
    {
        // return $this->get($ID, 'SwimmingPool', $table); /* add $table variable */
		return $this->get($ID, 'SwimmingPool', $table);
    }
}

?>
