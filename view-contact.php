<?php
include("header.php");
include("connection.php");
$result = mysqli_query($conn, "SELECT * FROM contacts");//selecting data form contact table from the data

?>

<div class="contact-view">
    <h2>Contact Inbox</h2>
    
    <table>
        <tr>
            <th><strong>SNO</strong></th>
            <th><strong>Name</strong></th>
            <th><strong>Email</strong></th>
            <th><strong>Subject</strong></th>
            <th><strong>Message</strong></th>
        </tr>
        <?php
            $i =1;
            while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
        ?>
        <a href='delete.php?slid=<?php echo $row['contact_id']; ?>&view=contactdelete'><img src='images/delete.png' width='32' height='32'  onclick="return confirm('Are you sure??')"/></a>
        <?php
        echo" </td>";
        echo "<td align=center>&nbsp;" . $i . "</td>";
        echo "<td align=center>&nbsp;" . $row['name'] . "</td>";
        echo "<td align=center>&nbsp;" . $row['email'] . "</td>";
        echo "<td align=center>&nbsp;<a href='inbox.php?cid=$row[contact_id]'>" . $row['subject'] . "</a></td>";
        echo "<td>&nbsp;<a href='inbox.php?cid=$row[contact_id]'>" . $row['message'] . "</a></td>";
        echo "</tr>&nbsp;";
        $i++;
        }
        
        ?>

        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>

        </tr>
    </table>
</div>
