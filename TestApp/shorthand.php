<!-- <?php

$loggedIn = false;

if($loggedIn)
{
echo 'logged in';
}
else
{
	echo 'logged out'; 
}
echo '<br>';
echo ($loggedIn)?'in':'out';

$isReg = ($loggedIn == true)? 'true' : 'false' ;

echo $isReg;


$age = 10;
$score =20;

echo "Your score is". ($score > 10 ? ($age>10 ? 'Avg' : 'Not Avg') : ($age>10? 'belo' : 'non below')); 

?>


<div>

<?php if($loggedIn): ?>

<h1>Testing App Done</h1>

<?php else : ?>

<h1>Not Done</h1>


<?php endif; ?>

	</div>
 -->

<?php $arr=[1,2,3]; ?>	

	<div>
	<?$php foreach($arr as $a): ?>


	
	<?php  echo $a; ?>
			
<?php endforeach; ?>
	</div>

