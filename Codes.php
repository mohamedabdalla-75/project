<?php
class Codes{
    public $db,$result;
    public function setConnect(){
        $this->db=new mysqli("localhost","root","","library3");
    }// end of setConnect method()
    public function generateSQL($array){
        $sql="call  ";
        $tiro=count($array);
        $i=1;
        foreach ($array as $key => $value) {
            if($i==1)
                $sql.="$value(";
            else if($i==$tiro)
                $sql.="'$value')";
            else
                $sql.="'$value',";
            $i++;
        }
        return $sql;
    }// end of generateSQL method  
    public function setSql($sql) {
    $this->setConnect();    
    $r = $this->db->query($sql);
    if ($r === false) {
        echo "SQL Error: " . $this->db->error;
    } else {
        if ($row = $r->fetch_array(MYSQLI_NUM)) {
            echo $row[0];
        } else {
            echo "No result returned.";
        }
        $r->free(); // optional: free result set
        }
    $this->db->close();
    } // end of setSql

    // Tusaale: $coder->viewTable("SELECT * FROM categories", "category");
public function viewTable($sql, $type = "")
{
    $this->setConnect();
    $this->result = $this->db->query($sql);
    $fields = $this->result->fetch_fields();
    ?>
    <table id="datatable"class="table table-striped table-bordered table-hover">
        <thead style="background-color: skyblue; color: white;">
            <tr>
                <?php foreach ($fields as $key => $value): ?>
                    <th><?php echo $value->name; ?></th>
                <?php endforeach ?>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->result as $key => $row): ?>
                <tr>
                    <?php foreach ($row as $key => $value): ?>
                        <td><?php echo $value; ?></td>
                    <?php endforeach ?>
                    <td>
                        <button class="btn btn-success btn-edit-<?php echo $type; ?>" data-id="<?php echo reset($row); ?>">
                            <i class="fa fa-pencil"></i>
                        </button> 
                        <button class="btn btn-danger btn-delete-<?php echo $type; ?>" data-id="<?php echo reset($row); ?>">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <?php
}
    public function search($sql){
        $this->setConnect();
        $this->result=$this->db->query($sql);
        if($row=$this->result->fetch_array(MYSQLI_ASSOC)){
            foreach ($row as $key => $value) {
                echo $value.",";
            }
        }
        $this->db->close();
    }
    public function fillCombo($sql){
        $this->setConnect();
        $rows=$this->db->query($sql);
        echo"<option>choose one of them</option>";
        while($row=$rows->fetch_array(MYSQLI_NUM)){
            echo"<option value=$row[0]>$row[1]</option>";
        }
        $this->db->close();
    }

public function getCount($sql) {
    $this->setConnect();
    $res = $this->db->query($sql);
    $count = 0;
    if ($res) {
        $row = $res->fetch_array(MYSQLI_NUM);
        $count = $row[0];
        $res->free();
    } else {
        echo "SQL Error: " . $this->db->error;
    }
    $this->db->close();
    return $count;
}
// Gudaha Codes.php
public function getRow($sql){
    $this->setConnect(); // hubi connection
    $result = $this->db->query($sql);
    if($result && $result->num_rows > 0){
        $row = $result->fetch_assoc();
        $result->free();
        $this->db->close();
        return $row;
    } else {
        $this->db->close();
        return false;
    }
}


}// end of class



?>
