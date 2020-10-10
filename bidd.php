<?php
include "function.php";
include "header.php";
//select distinct bidders.id, bidders.auctionid,MAX(bidders.bidamount) GROUP BY bidamount
//from bidders
//join auction on auction.id = bidders.auctionid
//where auction.closing_date=CURRENT_DATE()
//*select max(bidamount), userid,auctionid from bidders
 /* join auction on auction.id=bidders.auctionid where auction.closing_date=CURRENT_DATE 
 group by userid,auctionid
 order by 1 desc limit 1*/

//first check the
 /*SELECT COUNT(closing_date) as a
FROM auction where closing_date=CURRENT_DATE 
*/

$new=new DB_con();


if(isset($_POST['btnhighest'])){

if(!empty($_POST['txthighest'])){
$iss=0;
$iss=$_POST['txthighest'];
echo $iss;


$i=0;
$idd=1;
$fetchdata=new DB_con();
$sql=$fetchdata->fetchdata("auction");

//while($row=mysqli_fetch_array($sql))
//$result=$new->fettcrecord("bidders",);
$row=mysqli_fetch_assoc($result);

   if (mysqli_num_rows($result)>0) {
    
      while($row=mysqli_fetch_assoc($result)){
         if($i<$row['bidamount'])

{$i=$row['bidamount'];
$idd=$row['userid'];
$id=$row['auctionid'];
}
             }
   }
   else{echo "<br>Failed to execute";}
  
    
   $query1="SELECT `userid`, `fullname`, `email` FROM `user` WHERE `userid`=$idd";
   $result=mysqli_query($mysqli, $query1) or die(mysqli_error($mysqli));
   echo '<table class="table table-striped" >
	
	<tr>
	<td width=15%>Auction Id</td>
	<td width=15%>Full Name</td>
	<td width=15%>Email</td>
	<td width=15%>Bid Amount</td>
	</tr>';
   if (mysqli_num_rows($result)>0) {
  
      ?><legend>Highest Bidder of Auction<?php echo " $id";?></legend>
     <?php while($row=mysqli_fetch_assoc($result)){
         echo  '<tr>
         <td width=15%>'.$id.'</td>

              <td width=15%>'.$row['fullname'].'</td>
              <td width=15%>'.$row['email'].'</td>
              <td width=15%>'.$i.'</td>
              </tr>';
  
 }}
}
else
echo "Invalid Id or Input";
}




else 
{
$query="SELECT DISTINCT `auctionid` FROM `bidders`";

$idd=0;
   $result=mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
   $rows=mysqli_num_rows($result);

//echo $rows;

   
    $row=mysqli_fetch_assoc($result);

   if ($row>0) {
    
      while($row=mysqli_fetch_assoc($result)){
         

echo $row['auctionid']."<br>";


      }
            }



   else
echo "failed execute";  


}

?>


   
