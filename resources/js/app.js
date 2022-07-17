import './bootstrap';

$(document).ready(function()
{
    var Plotly = require('plotly.js-dist-min');

    var charts = document.querySelectorAll('.deviceChart');
    charts.forEach(function(value, key)
    {
        console.log(value.id);
        $.ajax({
            url: "/api/data/"+value.id,
            dataType: "json",
            type: "GET",
            async: true,
            data: { },
            success: function (data)
            {
                var x = getX(data.data);
                var y = getY(data.data);
                console.log(y);
                deviceChart(value.id, [
                {
                    x: x,
                    y: y,
                    mode: 'lines+markers',
                    name: 'Data1'
                },
                // {
                //     x: toHundert(),
                //     y: randomData(),
                //     mode: 'lines+markers',
                //     name: 'Data2'
                // }
                ]);
            }
        });
    });

    activityChart([
        {
            x: [1, 2, 3, 4, 5],
            y: [1, 2, 4, 8, 16],
            mode: 'lines+markers',
            name: 'Data1'
        },
        {
            x: [1, 2, 4, 8, 16],
            y: [1, 2, 3, 4, 5],
            mode: 'lines+markers',
            name: 'Data2'
        }]);
});

function activityChart(data) {

    var layout = {
        showlegend: false,
        xaxis: {
            title: ''
        },
        yaxis: {
            title: 'time in sec.'
        },
        margin: { t: 0 }
    };

    var config = {
        displayModeBar: false,
        responsive: true
    }

    Plotly.newPlot('tester', data, layout, config)
}

function deviceChart(id, data)
{
    var layout = {
        showlegend: false,
        xaxis: {
            title: ''
        },
        yaxis: {
            title: 'time in sec.'
        },
        margin: { t: 0 }
    };

    var config = {
        displayModeBar: false
    }

    Plotly.newPlot(id, data, layout, config)
}

function randomData()
{
    return [...Array(40)].map(e=>~~(Math.random()*40));
}

function toHundert()
{
    let numbersArray = [];
    let max = 100;
    for( var i=1; numbersArray.push(i++) < max;);

    return numbersArray;
}

function getX(deviceData)
{
    return [...Array(deviceData.length).keys()]
}

function getY(deviceData)
{
    return deviceData.map(a => a.delta);
}