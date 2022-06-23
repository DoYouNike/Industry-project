<?php
    include 'readFile.php';
?>

<script>
function searchFunc() {
    var keyword = document.getElementById("Search").value;
    var keywordUpper = keyword.toUpperCase();
    var keywordLength = keyword.length;

    var passedArray = <?php echo json_encode($procedures); ?>

    var d = {};
    
    for(var i = 0; i < passedArray.length; i++){
        var newString = passedArray[i].split(":");
        d[newString[0]] = newString[1];
    }

    var temp_array = [];

    if(keywordLength >= 3){
        // iterate through all keys (Procedures) and check if exact keyword (Search term) exists in keys (Procedures) #1                        WORKS
        // if true --> push to array
        for(var key in d){
            var newStr = key.replace(/,/g, "");
            var spltStr = newStr.split(" ");

            if(spltStr.includes(keywordUpper)){
                temp_array.push(key);
            }
        }

        // iterate through all keys (Procedures) and check if partial keyword (Search term) exists in values (Procedure keywords) #2            WORKS           
        // if true --> push to array
        for(var key in d){
            var value = d[key];
            var v = value.toString();

            if(v.includes(keyword)){
                temp_array.push(key);
            }
        }

        // iterate through all keys (Procedures) and check if exact keyword (Search term) exists in values (Procedure keywords) #3              WORKS
        // if true --> push to array
        for(var key in d){
            var value = d[key];

            if(value.includes(keyword)){
                temp_array.push(key);
            }
        }

        // iterate through all keys (Procedures) and check if partial keyword (Search term) exists in keys (Procedures) #4                      WORKS
        // if true --> push to array
        for(var key in d){
            if(key.includes(keywordUpper)){
                temp_array.push(key);
            }
        }
    }
    
    // create new array without any duplicate procedures
    var uniqueSet = new Set(temp_array);
    var backToArray = [...uniqueSet];
    for(var i = 0; i < backToArray.length; i++){
        backToArray[i] = backToArray[i].replace(/"/g, "");
    }

    console.log(backToArray);
    
    $( function() {
        $("#Search").autocomplete({
            source: backToArray,
            response: function( event, ui ) {
                ui.content.splice(0,ui.content.length);
                $.each(backToArray,function(i,n){
                    ui.content.push({label:n, value:n});
                });
            }
        });
        $("#Search").autocomplete("widget").attr('style', 'max-width: 545px; overflow-y: auto; overflow-x: auto;')
    });
}
</script>