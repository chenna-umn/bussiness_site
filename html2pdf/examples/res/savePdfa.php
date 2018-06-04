<style type="text/css">
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
</style>
<page backcolor="#FEFEFE">
    
    <table cellspacing="0" style="width: 100%; text-align: center; font-size: 14px">
        <tr>
            <td style="width: 25%; color: #444444;">
                <table>
                    <tr>
                        <!--DejaVuSans FreeSerif-->
                        <td style="width: 100%;text-align: left;font-family:FreeSerif;color: #000;font-style: italic;">
                            <p style="margin:0px;padding-top: 2px;">
                                Falcons Nest
                            </p>
                            <p style="margin:0px;padding-top: 2px;">
                                49 & 50, Road No #3, 
                            </p>
                            <p style="margin:0px;padding-top: 2px;">
                                Banjara Hills, 
                            </p>
                            <p style="margin:0px;padding-top: 2px;">
                                Hyderabad-34 (A.P), India. 
                            </p>
                            <p style="margin:0px;padding-top: 2px;">
                                Landline : 040 2335 2263 
                            </p>
                            <p style="margin:0px;padding-top: 2px;">
                                Mobile: +91 9533665536,  
                            </p>
                            <p style="margin:0px;padding-top: 2px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                +91 94400 22129.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
            
            <td style="width: 50%;">
                
            </td>
            
            <td style="width: 25%; color: #444444;">
                <br/>
                    <img style="width: 100%;float: left;" src="./res/fallogo.png" alt="Logo">
            </td>
            
        </tr>
    </table>
    <br/>
    <?php if( isset($_GET['id']) && !empty($_GET['id']) ) {
            include_once 'mysql.php';
            $strSQL = "SELECT overview FROM gallery where id=".$_GET['id'];
// Execute the query (the recordset $rs contains the result)
        $rs = mysql_query($strSQL) or die(mysql_error());
        if (!empty($rs)) {
        ?>
    <table cellspacing="0" style="width: 100%; text-align: center; font-size: 14px">
        <tr>
            <td style="width: 100%;text-align: left;font-family:FreeSerif;color: #000;font-style: italic;">
                <?php while ($row = mysql_fetch_array($rs)) { 
                    echo $row['overview'];
                } ?>
            </td>
        </tr>
    </table>
    <?php }} ?>
</page>