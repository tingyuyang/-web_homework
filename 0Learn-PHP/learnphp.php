<html>
	<head>
		<title> Information Gathered </title>
	</head>
	<body>
		<?php

			echo "<p> \"Data Proccessed\" </p>";
			
			#echo the time at the moment
			date_default_timezone_set('UTC');
			echo date("h:i:s l F jS Y")."</br>";
			
			#grab variable from html form 
			$userName=$_POST['username'];
			$streetAddress = $_POST['streetaddress'];
			$cityAddress = $_POST['cityaddress'];
			
			#math
			echo "</br>5/2=".(integer)(5/2)."</br>";
			$randNum=5;
			echo "++ randNum=".++$randNum."</br>";
			
			#conditional
			$numOfOranges=4;
			$numOfBananas=36;
			if (($numOfOranges>25) && ($numOfBananas>30)){
			    echo '25 % discount';
			}elseif (($numOfOranges>30) || ($numOfBananas>30)) {
			    // code...
			    echo '15% discount</br>';
			}else{
			    echo "<p>No Discount</p>";
			}
			
			#? 
			$biggestNum=(15>10)? 15:10;
			echo $biggestNum."</br>";
			
			#switch
			switch ($userName) {
			    case 'Ben':
			        echo "Hello Ben</br>";
			        break;
			    
			    case "Sally":
			        echo "Hellp Sally";
			        break;
			        
			    default: #so if both case above did not occur, it will print he default 
			        echo "Hello my dear Customer</br>";
			        break;
			}
			
			#
			$num=0;
			while ($num<20){
			    echo ++$num;
			    if ($num!=20){
			        echo ",";
			    }
			}
			echo "</br></br>";

			#array
			$bestFriends=array('Joy','Willow','Ivy');
			echo "my wife ".$bestFriends[0]."</br>";
			$bestFriends[4]="Steve";
			echo "</br>";
			
			#array +key
			$customer =array('Name'=>$userName,"Street"=>$streetAddress,"City"=>$cityAddress);
			foreach ($customer as $key=>$value){
			    echo $key.":".$value."</br>";
			}
			
			echo "</br></br>";
			
			#multi
			$customers = array(array('Derek', '123 Main', '15212'),
							   array('Sue', '124 Main', '15222'),
							   array('Bob', '125 Main', '15212'));
							   
			for($row = 0; $row < 3; $row++){
			
				for($col = 0; $col < 3; $col++){
				
					echo $customers[$row][$col] . ', ';
				
				}
				echo '</br>';
			
			}
			
			#sort
			$randStr="                       Random String              ";
			
			echo "</br></br>";
			echo "original:".strlen("$randStr")."</br>";
			echo strlen(ltrim("$randStr"))."</br>"; #trim space on the left
			echo strlen(trim("$randStr"))."</br>";
			
			#print
			echo "the randomstring is $randStr</br>";
			printf("the randomstring is %s </br>",$randStr);
    		 
    		#decimal
    		$decimalNum=2.1334;
    		printf ("decimal num = %0.2f </br>", $decimalNum);
    		
    		#case
    		echo strtoupper($randStr)."</br>";
    		echo ucfirst($randStr)."</br>";
    		echo "</br></br>";
    		
    		#turn array to string
    		$arrayForString=explode(' ',$randStr,2);
    		$stringToArray=implode(' ',$arrayForString);
    		$partOfString=substr("Random String",0,6);
    		echo $partOfString;
    		echo "</br></br>";
    		
    		#compare string
    		$man="Man";
    		$manhole="ManHole";
    		echo strcmp($man,$manhole);
    		
    		echo "</br></br>";
    		$newString=str_replace("String","Stuff",$randStr);
    		echo $newString;
    		echo "</br></br>";
    		
    		#if i wanna function in the thing~
    		function addNumbers($num1,$num2){
    		    return $num1 +$num2;
    		}
    		echo "3+4=".addNumbers(3,4);
		?>
	</body>
</html>
