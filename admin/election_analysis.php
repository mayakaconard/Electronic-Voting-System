<?php
require_once( '../library/mpdf.php');
$stylesheet = file_get_contents('../css/pdfLayout.css');
// Setup PDF
date_default_timezone_set('Africa/Nairobi');
$d=new DateTime();
$dat=$d->format('d/m/y  h:i:s a');
$sid="1234567";
//$mpdf = new mPDF('utf-8', 'A4',0,0,5,5,15,16,4,9,'P');
$mpdf = new mPDF('utf-8', 'A4',0,'',5,10,15,16,4,9,'P');
$mpdf->SetDisplayMode(real,'default');
require_once('../config/db_connect.php');
//require_once('../include/session2.php');
//require_once('include/functions.php');
$mpdf->showWatermarkImage=true;
//$mpdf->SetWatermarkImage('../images/logo1.png ');
//$mpdf->showWatermarkText = true;
//$mpdf->WriteHTML('<watermarktext content="MTRH SYSTEM" alpha="0.1" />');
$mpdf->setAutoTopMargin = 'stretch';
$mpdf->setAutoBottomMargin = 'stretch';
//$fullname= $row['first_name'];
$mpdf->SetHTMLFooter('<div class="pdf-footer">
<strong>Disclaimer :</strong> <i>This is a system generated report Form and does not require signature.</i>
<hr>
<i>Generated and Printed on '.$dat.' </i>
</div>');

$mpdf->WriteHTML($stylesheet,1);
$html='
  <html>
<body> <div class="container" >
<div class="row-fluid">
<div style="color:#fffff; text-align:left; padding:5px;padding-left:0%"><barcode code=" '.$sid.' " type="C128A" size="0.5" height="1.0"/></div>

</div>
     <div class="row-fluid "  >
              <img src="../images/logo1.png" style="padding-left:39%" alt="School Logo" class="logo" width="120" height="100"/>
<h3 style="padding-top:0px; padding-left:16%; ">MASINDE MULIRO UNIVERSITY OF SCIENCE & TECHNOLOGY </h3>
            <h4 style="padding-left:26%;">Office of the Registrar, Academics Affairs</h4>
              </div>
              <div class="row-fluid"  style="padding-left:10%; padding-right:-5%;">
           <div class="span6 pull-left" style="text-align:left;margin-top:-20px;"><br/>
           Tel. No: 020-2063540 <br/>
           Email: <u> info@mmust.ac.ke</u><br/>
           Website: <u>www.mmust.ac.ke</u><br/>
           </div>

           <div class="span6" style="text-align:left; padding-left:74%; margin-top:-65px; ">P.O Box 190 <br/>
                                               Kakamega-50100 <br/>
                                               Kenya.<br/>
           </div>
           </div>
           <div class=" row-fluid1"  style="padding-left:10%; padding-right:-5%;">
                      <hr/>  </div>
           <div class=" row-fluid1"  style="padding-left:10%; padding-right:-5%;" style="text-align:center">
           <br/>        <div style="padding-left:10%; padding-right:-5%;" >
                     <u><strong>MMUSO PARLIAMENTARIAN ELECTIONS ANALYSIS</strong></u>
                      </div>
                      </div>
                         <br/>
             <div class=" row-fluid1"  style="padding-left:10%; padding-right:-5%;" style="text-align:center">
                        <br/>
                        <div style="padding-left:10%; padding-right:-5%;" >
                     <u><strong>TOTAL REGISTERED STUDENTS PER SCHOOL</strong></u>
                      </div>
                      </div>
                         <br/>


           <div class="row-fluid " style="padding-left:10%; padding-right:-5%;">
                          <table class="table table-bordered">
                                     <thead>
                                     <tr>
                                         <th>NO.</th>
                                        <th>School Name</th>
                                        <th>Total</th>
                                     </tr>
                                     </thead>
                                     <tbody>';
                                     //populate the table for MMUSO PARLIAMENTARY CANDIDATES
                                       $s="SELECT students.school_id,schools.school_name
                                            ,COUNT(DISTINCT reg_number) AS total
                                               FROM students, schools WHERE students.school_id=schools.school_id
                                               GROUP BY schools.school_name";
                                                $q=mysqli_query($conn,$s);
                                                $count=1;
                                                while($r=mysqli_fetch_assoc($q)) {

                                       $html.= '<tr>
                                        <td>'.$count.'</td>
                                        <td>'. $r['school_name'].'</td>
                                        <td>'.$r['total'].'</td>

                                       </tr>';
                                         $count++;
                                   }
                                $html .='</tbody>
                                     </table>



                        <br/>
                        <div style="padding-left:20%; padding-right:-5%;" >
                     <u><strong>TOTAL VOTED STUDENTS</strong></u>
                      </div>
                      </div>
                         <br/>


           <div class="row-fluid " style="padding-left:10%; padding-right:-5%;">
                          <table class="table table-bordered">
                                     <thead>
                                     <tr>
                                         <th>NO.</th>
                                        <th>School Name</th>
                                        <th>Total</th>
                                     </tr>
                                     </thead>
                                     <tbody>';
                                     //populate the table for MMUSO PARLIAMENTARY CANDIDATES
                                           $s="SELECT votes.school_id,schools.school_name
                                                ,COUNT(DISTINCT reg_number) AS total
                                                   FROM votes, schools WHERE
                                                   votes.school_id=schools.school_id
                                                   GROUP BY schools.school_name
                                                   ORDER BY schools.school_id";
                                                $q=mysqli_query($conn,$s);
                                                $count=1;
                                                while($r=mysqli_fetch_assoc($q)) {

                                       $html.= '<tr>
                                        <td>'.$count.'</td>
                                        <td>'. $r['school_name'].'</td>
                                        <td>'.$r['total'].'</td>

                                       </tr>';
                                         $count++;
                                   }
                                $html .='</tbody>
                                     </table>

                                 <div style="padding-left:20%; padding-right:-5%;" >
                                        <u><strong>REGISTERED RESIDENCE VOTERS </strong></u>
                                     </div>
                                        <br/>
                                    <table class="table table-bordered">
                                     <thead>
                                     <tr>
                                         <th>NO.</th>
                                        <th>RESIDENCE</th>
                                        <th>TOTAL</th>

                                     </tr>
                                     </thead>
                                     <tbody>';
                                     //populate the table for MMUSO PARLIAMENTARY CANDIDATES
                                      $s="SELECT   residency.residence_name
                                        ,COUNT(DISTINCT reg_number) AS total
                                           FROM students, residency WHERE
                                           students.residence_id IN (10,11,12,13,14,15,16) AND residency.residence_id=students.residence_id
                                           GROUP BY residency.residence_name";

                                        $q=mysqli_query($conn,$s);
                                        $count=1;
                                        while($r=mysqli_fetch_assoc($q)) {

                                       $html.= '<tr>
                                        <td>'.$count.'</td>
                                        <td>'. $r['residence_name'].'</td>
                                        <td>'.$r['total'].'</td>

                                       </tr>';
                                         $count++;
                                   }
                                $html .='</tbody>
                                     </table>



                                     <div style="padding-left:20%; padding-right:-5%;" >
                                        <u><strong> TOTAL VOTED RESIDENCE STUDENTS</strong></u>
                                     </div>
                                        <br/>
                                    <table class="table table-bordered">
                                     <thead>
                                     <tr>
                                         <th>NO.</th>
                                        <th>RESIDENCE</th>
                                        <th>TOTAL</th>

                                     </tr>
                                     </thead>
                                     <tbody>';
                                     //populate the table for MMUSO PARLIAMENTARY CANDIDATES
                                      $s="SELECT  residency.residence_name
                                        ,COUNT(DISTINCT votes.reg_number) AS total
                                           FROM students,votes, residency WHERE
                                        students.reg_number=votes.reg_number AND
                                           students.residence_id IN (10,11,12,13,14,15,16) AND residency.residence_id=students.residence_id
                                           GROUP BY residency.residence_name ORDER BY residency.residence_id ASC";

                                        $q=mysqli_query($conn,$s);
                                        $count=1;
                                        while($r=mysqli_fetch_assoc($q)) {

                                       $html.= '<tr>
                                        <td>'.$count.'</td>
                                        <td>'. $r['residence_name'].'</td>
                                        <td>'.$r['total'].'</td>

                                       </tr>';
                                         $count++;
                                   }
                                $html .='</tbody>
                                     </table>

                                     <div style="padding-left:20%; padding-right:-5%;" >
                                        <u><strong> TOTAL REGISTERED STUDENTS</strong></u>
                                     </div>
                                        <br/>
                                    <table class="table table-bordered">
                                     <thead>
                                     <tr>
                                         <th>NO.</th>
                                        <th>  </th>
                                        <th>TOTAL</th>

                                     </tr>
                                     </thead>
                                     <tbody>';
                                     //populate the table for MMUSO PARLIAMENTARY CANDIDATES
                                      $s="SELECT COUNT(reg_number) AS registered_students FROM students";

                                        $q=mysqli_query($conn,$s);
                                        $count=1;
                                        while($r=mysqli_fetch_assoc($q)) {

                                       $html.= '<tr>
                                        <td>'.$count.'</td>
                                        <td>NUMBER OF REGISTERED STUDENTS AS VOTERS</td>
                                        <td>'.$r['registered_students'].'</td>

                                       </tr>';
                                         $count++;
                                   }
                                $html .='</tbody>
                                     </table>

                                      <div style="padding-left:20%; padding-right:-5%;" >
                                        <u><strong> TOTAL CASTED VOTES</strong></u>
                                     </div>
                                        <br/>
                                    <table class="table table-bordered">
                                     <thead>
                                     <tr>
                                         <th>NO.</th>
                                         <th></th>
                                        <th>TOTAL NUMBER</th>


                                     </tr>
                                     </thead>
                                     <tbody>';
                                     //populate the table for MMUSO PARLIAMENTARY CANDIDATES
                                      $s="SELECT COUNT(DISTINCT reg_number) AS total FROM votes";

                                        $q=mysqli_query($conn,$s);
                                        $count=1;
                                        while($r=mysqli_fetch_assoc($q)) {

                                       $html.= '<tr>
                                        <td>'.$count.'</td>
                                        <td>NUMBER OF STUDENTS WHO CASTED THEIR VOTED</td>
                                        <td>'. $r['total'].'</td>

                                       </tr>';
                                         $count++;
                                   }
                                $html .='</tbody>
                                     </table>

                                    <br/>
                                     <br/>
                                      <br/>
                            <div style="content-align:center;">
                          <img src="../images/stamp.png"alt=""  style="background-color: #FFFFFF; border: none;"  width="150" height="150"/> <br/>
                        <strong>Smartvoter System
                         <br/>
                        <u>The MMUSO Returning Officer </u>
                        </strong>
                          </div>


              </div> </div>  </body>
           </html>';

$mpdf->WriteHTML($html,2); // Writing html to pdf

//$mpdf->Output(); // For sending Output to browser
$mpdf->Output('MMUSO CANDIDATES.pdf','I'); // For Download
exit;
?>