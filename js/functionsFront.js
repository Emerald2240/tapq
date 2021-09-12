function generateCQAPSL(originalArray) {
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
    console.log(generatedArray);
}

function returnhtmlEntities(str) {
        return str.replace("\\\\n", /\n/g).replace("\\\\r", /\r/g).replace("\\\\t", /\t/g);
}