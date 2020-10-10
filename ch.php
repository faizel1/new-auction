<?php
//trying auction winner using sql.select bid.userid,MAX(bid.bidamount) from auction as auc JOIN bidders as bid 
//ON auc.id = bid.auctionid where auc.closing_date = CURRENT_DATE() GROUP BY bid.bidamount,bid.id 
//other select bid.userid,MAX(bid.bidamount) from auction as auc JOIN bidders as bid 
//ON auc.id = bid.auctionid where auc.closing_date = CURRENT_DATE() GROUP BY bid.userid
class winner{

public $value;


public function  winner($bid,$date){







}


}


?>