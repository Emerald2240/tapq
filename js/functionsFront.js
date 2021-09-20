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
    if (obj_or_theory == 1) {
        limit = 49;
    } else {
        limit = 9;
    }

    for (var i = 0; i < pjson.length; i++) {
        html += '<div class="question">'; //start of question div
        html += '<span class="num">';
        html += [i + 1];
        html += '</span>';
        html += '<div class="q">';
        html += pjson[i][1];
        html += '</div></div><br>';
        if (i == limit) {
            i = pjson.length;
        }
    }



    container.innerHTML = html;

}

function returnhtmlEntities(str) {
    return str.replace("\\\\n", /\n/g).replace("\\\\r", /\r/g).replace("\\\\t", /\t/g);
}

var myFilterBox = addFilterBox({
    target: {
        selector: '.course_head',
        items: '.course ul',
        sources: [
            'li:nth-child(1)',
            'li:nth-child(2)'
        ]
    },
    addTo: {
        selector: '.course_head',
        position: 'before'
    },
    input: {
        label: 'Search: ',
        attrs: {
            class: 'form-control',
            placeholder: 'Enter course code or title'
        }
    },
    // wrapper: {
    //     tag: 'div',
    //     attrs: {
    //         class: 'filterbox-wrap'
    //     }
    // },
    displays: {
        counter: {
            tag: 'span',
            attrs: {
                class: 'counter'
            },
            addTo: {
                selector: '.filterbox-wrap',
                position: 'append'
            },
            text: function () {
                return '<strong>' + this.countVisible() + '</strong>/' + this.countTotal();
            }
        },
        noresults: {
            tag: 'div',
            addTo: {
                selector: '.course_head',
                position: 'after'
            },
            attrs: {
                class: 'no-results'
            },
            text: function () {
                return !this.countVisible() ? 'No matching course code or title for "' + this.getFilter() + '".' : '';
            }
        }
    },
    callbacks: {
        onReady: onFilterBoxReady,
        afterFilter: function () {
            this.toggleHide(this.getTarget(), this.isAllItemsHidden());
        },
        onEnter: function () {
            var $firstItem = this.getFirstVisibleItem();

            if ($firstItem) {
                alert('First visible item: ' + $firstItem.querySelector('td').textContent + '\n(onEnter callback)');
            }
        }
    },
    highlight: {
        style: 'background: #FFD662',
        minChar: 1
    },
    filterAttr: 'data-filter',
    suffix: '-mysuffix',
    debuglevel: 2,
    inputDelay: 100,
    zebra: true,
    enableObserver: true,
    initTableColumns: true,
    useDomFilter: false
});

function onFilterBoxReady() {
    this.fixTableColumns(this.getTarget());
    // this.filter('bra');
    this.focus(true);
}