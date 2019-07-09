<?php
    $testArray = ["banane" => 16, "pomme" => 17, "orange" => 17];
    $resultForJs = ""; // which must contain, in finish, the result of your code
    // code here
?>
<script type="text/javascript">
    var testArray = <?=$resultForJs?>;
    console.log(testArray);
</script>