function validateNewExamForm(numOfquestions) {
    var jsonta = document.getElementById("jsonta");
    let qs_and_as = [];

    //arrays for holding question and answer textarea id's
    var qfields = [];
    var afields = [];
    var missingNums = [];

    //names for question and answer textareas before number prefixes
    qtxtAreaName = 'question';
    atxtAreaName = 'answer';

    //this loops through the number of questions intended and adds the number prefixes as per how theyre numbered and made unique then adds them to an array for easy identification
    for (var i = 0; i <= numOfquestions; i++) {
        qfields[i] = qtxtAreaName + i;
        afields[i] = atxtAreaName + i;
    }

    var i, afieldname, qfieldname;

    ////this loops through the array containing the names of the question and answer textareas and checks if they are empty
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

    if (missingNums.length > 0) {
        jsonta.innerHTML = "";
        for (var j = 0; j < missingNums.length; j++) {
            jsonta.innerHTML += 'Missing Number ' + missingNums[j] + '\n';
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