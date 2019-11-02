<?php
    class Note {
        public $id;
        public $note;
        public $created;

        public function __construct($id = "", $note = "", $created = ""){
            $this->id = $id;
            $this->note = $note;
            $this->created = $id;
        }

        

        public function getNote($id, $link){
            $sql = "SELECT * FROM notes WHERE id='$id';";
            $result = mysqli_query($link, $sql);

            $note = mysqli_fetch_array($result);

            $this->id = $note['id'];
            $this->note = $note['note'];
            $this->created = $note['created'];

            return $this;
        }

        public static function getAllNotes($link){
            $sql = "SELECT * FROM notes;";
            $results = mysqli_query($link, $sql);

            $notes = array();
            //for every row in the table...
            while ($row = mysqli_fetch_array($results)){
                //create a new note object and save it in an array
                $note = new Note($row['id'], $row['note'], $row['created']);
                //$note->id = $row['id'];
                //$note->note = $row['note'];
                //$note->created = $row['created'];

                //append $note (Note object) to $notes array
                $notes[] = $note;
                
            }

            return $notes;
        }
    }
?>