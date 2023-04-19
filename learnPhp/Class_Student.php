<?php

class Student{
    private $file;
    


    public function __construct()
    {
        $this->file=fopen('Student_Table.txt','a');
    }

    public function Add_Student($name,$stage){
        $ar_file=file("Student_Table.txt");
        $this->file=fopen('Student_Table.txt','a+');
        $id=count($ar_file);
        fwrite($this->file,"$id $name $stage \n");

        fclose($this->file);


    }

    public function Read_Student(){
        $ar_file=file("Student_Table.txt");
        $this->file=fopen('Student_Table.txt','r');

        for( $i=0 ; $i < count($ar_file) ; $i++){
            echo "|||||||||||| ";
            $row=explode(' ',$ar_file[$i]);
            echo "***** ".'id = '.$row[0].' , name : '.$row[1].' , stage : '.$row[2]." *****" ;
        }

        fclose($this->file);
    }

    public function Search_Student($id){
        $ar_file=file("Student_Table.txt");

        for( $i=0 ; $i < count($ar_file) ; $i++){
            $row=explode(' ',$ar_file[$i]);
            if($row[0]==$id){
                echo "***** ".'id = '.$row[0].' , name : '.$row[1].' , stage : '.$row[2]." *****" ;
            }
        }

    }


    public function Chack_id(){
        $ar_file=file("Student_Table.txt");

        for( $i=0 ; $i < count($ar_file) ; $i++){
            $row=explode(' ',$ar_file[$i]);
            $row[0]=$i;
            $ar_file[$i]=implode(' ',$row);
        }

        $this->file=fopen("Student_Table.txt",'w');
        fwrite($this->file,implode('',$ar_file));
        fclose($this->file);

    }

    public function Delete_Student($id){

        $ar_file=file("Student_Table.txt");

        for( $i=0 ; $i < count($ar_file) ; $i++){
            $row=explode(' ',$ar_file[$i]);
            if($row[0]==$id){
                unset($ar_file[$i]);
            }
        }
        
        
        $this->file=fopen("Student_Table.txt",'w');
        fwrite($this->file,implode('',$ar_file));
        fclose($this->file);

        $this->Chack_id();
            
    }




    public function Change_info($id,$name,$stage){

        $ar_file=file("Student_Table.txt");

        for( $i=0 ; $i < count($ar_file) ; $i++){
            $row=explode(' ',$ar_file[$i]);
            if($row[0]==$id){
                if($name!='')
                    $row[1]=$name;
                if($stage!='')
                    $row[2]=$stage; 
                
                $ar_file[$i]=implode(' ',$row);
            }
        }
        
        
            $this->file=fopen("Student_Table.txt",'w');
            fwrite($this->file,implode('',$ar_file));
            fclose($this->file);
    }


    


};






?>