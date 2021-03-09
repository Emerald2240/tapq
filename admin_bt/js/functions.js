function validateNewExamForm(numOfquestions, obj_or_theory) {

    var jsonta = document.getElementById("jsonta");
    var missing_num = document.getElementById("missing_num");


    if (obj_or_theory == 1) {






    } else {
        let qs_and_as = [];

        //arrays for holding question and answer textarea id's
        var qfields = [];
        var afields = [];
        var missingNums = [];

        //names for question and answer textareas before number prefixes example: question1. 1 is added to 'question'.
        qtxtAreaName = 'question';
        atxtAreaName = 'answer';

        //this loops through the number of questions intended and adds the number prefixes as per how theyre numbered and made unique then adds them to an array for easy identification
        for (var i = 0; i <= numOfquestions; i++) {
            qfields[i] = qtxtAreaName + i;
            afields[i] = atxtAreaName + i;
        }

        var i, afieldname, qfieldname;

        //this loops through the array containing the names of the question and answer textareas and checks if they are empty
        for (i = 1; i <= numOfquestions; i++) {
            qfieldname = qfields[i];
            afieldname = afields[i];

            if (document.getElementById(qfieldname).value === "" || document.getElementById(afieldname).value === "") {
                console.log("Form field not filled");
                missingNums.push(i);

            } else {
                console.log("form field filled")

            }
        }

        //this sets the json textarea and error paragraph to nothing so new data can be added. 
        jsonta.innerHTML = "";
        missing_num.innerHTML = "";
        if (missingNums.length > 0) {


            for (var j = 0; j < missingNums.length; j++) {
                // missing_num.innerHTML += 'Missing Number ' + missingNums[j] + '\n';
                missing_num.innerHTML += 'Missing Num ' + missingNums[j] + ', ';
            }
        } else {
            for (i = 1; i <= numOfquestions; i++) {
                qfieldname = qfields[i];
                afieldname = afields[i];


                //example: {id:159223019, title, 'Deadpool', year:2015}

                let q_and_a = {
                    number: i,
                    question: document.getElementById(qfieldname).value,
                    answer: document.getElementById(afieldname).value
                }

                qs_and_as.push(q_and_a);

            }
            jsonta.innerHTML = JSON.stringify(qs_and_as, 't', 2);
        }

    }

}//end of obj or theory if statement