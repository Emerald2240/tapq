function generateCQAPSL(originalArray, obj_or_theory) {

    console.log("Function Working");
    var generatedArray = [];

    for (var i = 0; i < originalArray.length; i++) {
        var mainStr = originalArray[0];
        originalArray.shift();

        var result = stringSimilarity.findBestMatch(mainStr, originalArray);

        var ratingsarray = [];
        ratingsarray = result.ratings;
        var averageRating = 0;

        for (var j = 0; j < ratingsarray.length; j++) {
            averageRating += ratingsarray[j].rating;
        }

        averageRating / ratingsarray.length;


        for (var j = 0; j < ratingsarray.length; j++) {
            if (ratingsarray[j].rating >= 0.6) {
                //ratingsarray.splice(j, 1);
            }
        }

        generatedArray.push([averageRating, mainStr]);
    }
    generatedArray.sort();
    generatedArray.reverse();
    //console.log(generatedArray);
    // document.write(JSON.stringify(generatedArray));
    generatedArray = JSON.stringify(generatedArray);
    var pjson = JSON.parse(generatedArray);

    var container = document.getElementById("qabox");
    var html = '';
var limit = 0;
    if(obj_or_theory == 1){
limit = 49;
    }else{
        limit = 9;
    }

    for (var i = 0; i < pjson.length; i++) {
        html += '<div class="question">'; //start of question div
        html += '<span class="num">';
        html += [i+1];
        html += '</span>';
        html += '<div class="q">';
        html += pjson[i][1];
        html += '</div></div><br>';
        if(i == limit){
            i = pjson.length;
        }
    }

    

    container.innerHTML = html; 
   
}

function returnhtmlEntities(str) {
    return str.replace("\\\\n", /\n/g).replace("\\\\r", /\r/g).replace("\\\\t", /\t/g);
}