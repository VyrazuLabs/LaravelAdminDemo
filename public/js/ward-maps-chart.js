
// This Js file is particularly for only the ward-profile page maps and hence,should be used for this particular function only

// Ward No:1-27

google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data01 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1408, "#27ae60"],
    ["Total Population", 6309, "#235d9c"],
    ["Males", 3238, "#27ae60"],
    ["Females", 3071, "color: #235d9c"],
    ["Literate Persons", 5307, "#27ae60"],
    ["Males", 2820, "#235d9c"],
    ["Females", 2487, "color: #27ae60"]
  ]);
  var data02 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1954 , "#27ae60"],
    ["Total Population", 9923, "#235d9c"],
    ["Males", 5102, "#27ae60"],
    ["Females", 4821, "color: #235d9c"],
    ["Literate Persons", 7416, "#27ae60"],
    ["Males", 3970, "#235d9c"],
    ["Females", 3446, "color: #27ae60"]
  ]);
  var data03 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1637 , "#27ae60"],
    ["Total Population", 8100, "#235d9c"],
    ["Males", 4189, "#27ae60"],
    ["Females", 3907, "color: #235d9c"],
    ["Literate Persons", 6300, "#27ae60"],
    ["Males", 3432, "#235d9c"],
    ["Females", 2864, "color: #27ae60"]
  ]);
  var data04 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 2476 , "#27ae60"],
    ["Total Population", 10830, "#235d9c"],
    ["Males", 5571, "#27ae60"],
    ["Females", 5259, "color: #235d9c"],
    ["Literate Persons", 8896, "#27ae60"],
    ["Males", 4766, "#235d9c"],
    ["Females", 4130, "color: #27ae60"]
  ]);
  var data05 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1950 , "#27ae60"],
    ["Total Population", 9249, "#235d9c"],
    ["Males", 4698, "#27ae60"],
    ["Females", 4551, "color: #235d9c"],
    ["Literate Persons", 7091, "#27ae60"],
    ["Males", 3869, "#235d9c"],
    ["Females", 3222, "color: #27ae60"]
  ]);
  var data06 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1266 , "#27ae60"],
    ["Total Population", 6714, "#235d9c"],
    ["Males", 3458, "#27ae60"],
    ["Females", 3256, "color: #235d9c"],
    ["Literate Persons", 4332, "#27ae60"],
    ["Males", 2404, "#235d9c"],
    ["Females", 1928, "color: #27ae60"]
  ]);
  var data07 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1831 , "#27ae60"],
    ["Total Population", 9105, "#235d9c"],
    ["Males", 4728, "#27ae60"],
    ["Females", 4377, "color: #235d9c"],
    ["Literate Persons", 7551, "#27ae60"],
    ["Males", 4096, "#235d9c"],
    ["Females", 3455, "color: #27ae60"]
  ]);
  var data08 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1384 , "#27ae60"],
    ["Total Population", 5652, "#235d9c"],
    ["Males", 2895, "#27ae60"],
    ["Females", 2757, "color: #235d9c"],
    ["Literate Persons", 4798, "#27ae60"],
    ["Males", 2562, "#235d9c"],
    ["Females", 2487, "color: #27ae60"]
  ]);
  var data09 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 2737 , "#27ae60"],
    ["Total Population", 12315, "#235d9c"],
    ["Males", 6414, "#27ae60"],
    ["Females", 5901, "color: #235d9c"],
    ["Literate Persons", 9800, "#27ae60"],
    ["Males", 5431, "#235d9c"],
    ["Females", 4369, "color: #27ae60"]
  ]);
  var data10 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1710 , "#27ae60"],
    ["Total Population", 8252, "#235d9c"],
    ["Males", 4292, "#27ae60"],
    ["Females", 3958, "color: #235d9c"],
    ["Literate Persons", 6857, "#27ae60"],
    ["Males", 3703, "#235d9c"],
    ["Females", 3153, "color: #27ae60"]
  ]);
  var data11 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1666 , "#27ae60"],
    ["Total Population", 7205, "#235d9c"],
    ["Males", 3718, "#27ae60"],
    ["Females", 3487, "color: #235d9c"],
    ["Literate Persons", 5624, "#27ae60"],
    ["Males", 3096, "#235d9c"],
    ["Females", 2528, "color: #27ae60"]
  ]);
  var data12 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1563 , "#27ae60"],
    ["Total Population", 6982, "#235d9c"],
    ["Males", 3590, "#27ae60"],
    ["Females", 3392, "color: #235d9c"],
    ["Literate Persons", 5513, "#27ae60"],
    ["Males", 3051, "#235d9c"],
    ["Females", 2462, "color: #27ae60"]
  ]);
  var data13 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1327 , "#27ae60"],
    ["Total Population", 6144, "#235d9c"],
    ["Males", 3126, "#27ae60"],
    ["Females", 3018, "color: #235d9c"],
    ["Literate Persons", 4823, "#27ae60"],
    ["Males", 2619, "#235d9c"],
    ["Females", 2204, "color: #27ae60"]
  ]);
  var data14 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1678 , "#27ae60"],
    ["Total Population", 7881, "#235d9c"],
    ["Males", 4063, "#27ae60"],
    ["Females", 3818, "color: #235d9c"],
    ["Literate Persons", 5979, "#27ae60"],
    ["Males", 3296, "#235d9c"],
    ["Females", 2683, "color: #27ae60"]
  ]);
  var data15 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1535 , "#27ae60"],
    ["Total Population", 7921, "#235d9c"],
    ["Males", 4093, "#27ae60"],
    ["Females", 3828, "color: #235d9c"],
    ["Literate Persons", 5983, "#27ae60"],
    ["Males", 3292, "#235d9c"],
    ["Females", 2691, "color: #27ae60"]
  ]);
  var data16 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1427 , "#27ae60"],
    ["Total Population", 6647, "#235d9c"],
    ["Males", 3421, "#27ae60"],
    ["Females", 3226, "color: #235d9c"],
    ["Literate Persons", 5277, "#27ae60"],
    ["Males", 2904, "#235d9c"],
    ["Females", 2373, "color: #27ae60"]
  ]);
  var data17 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 940 , "#27ae60"],
    ["Total Population", 4666, "#235d9c"],
    ["Males", 2450, "#27ae60"],
    ["Females", 2216, "color: #235d9c"],
    ["Literate Persons", 3665, "#27ae60"],
    ["Males", 2042, "#235d9c"],
    ["Females", 1623, "color: #27ae60"]
  ]);
  var data18 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1768 , "#27ae60"],
    ["Total Population", 7791, "#235d9c"],
    ["Males", 4028, "#27ae60"],
    ["Females", 3763, "color: #235d9c"],
    ["Literate Persons", 5877, "#27ae60"],
    ["Males", 3296, "#235d9c"],
    ["Females", 2581, "color: #27ae60"]
  ]);
  var data19 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1488 , "#27ae60"],
    ["Total Population", 7019, "#235d9c"],
    ["Males", 3682, "#27ae60"],
    ["Females", 3337, "color: #235d9c"],
    ["Literate Persons", 5742, "#27ae60"],
    ["Males", 3143, "#235d9c"],
    ["Females", 2599, "color: #27ae60"]
  ]);
  var data20 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 962 , "#27ae60"],
    ["Total Population", 6645, "#235d9c"],
    ["Males", 4559, "#27ae60"],
    ["Females", 2086, "color: #235d9c"],
    ["Literate Persons", 5945, "#27ae60"],
    ["Males", 4294, "#235d9c"],
    ["Females", 1651, "color: #27ae60"]
  ]);
  var data21 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1235 , "#27ae60"],
    ["Total Population", 5956, "#235d9c"],
    ["Males", 3160, "#27ae60"],
    ["Females", 2796, "color: #235d9c"],
    ["Literate Persons", 4382, "#27ae60"],
    ["Males", 2393, "#235d9c"],
    ["Females", 1989, "color: #27ae60"]
  ]);
  var data22 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1813 , "#27ae60"],
    ["Total Population", 7042, "#235d9c"],
    ["Males", 3632, "#27ae60"],
    ["Females", 3410, "color: #235d9c"],
    ["Literate Persons", 6032, "#27ae60"],
    ["Males", 3225 , "#235d9c"],
    ["Females", 2807, "color: #27ae60"]
  ]);
  var data23 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1606 , "#27ae60"],
    ["Total Population", 6569, "#235d9c"],
    ["Males", 3379, "#27ae60"],
    ["Females", 3190, "color: #235d9c"],
    ["Literate Persons", 5161, "#27ae60"],
    ["Males", 2794, "#235d9c"],
    ["Females", 2367, "color: #27ae60"]
  ]);
  var data24 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1972 , "#27ae60"],
    ["Total Population", 9395, "#235d9c"],
    ["Males", 4844, "#27ae60"],
    ["Females", 4551, "color: #235d9c"],
    ["Literate Persons", 7631, "#27ae60"],
    ["Males", 4137, "#235d9c"],
    ["Females", 3494, "color: #27ae60"]
  ]);
  var data25 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 1908 , "#27ae60"],
    ["Total Population", 8292, "#235d9c"],
    ["Males", 4223, "#27ae60"],
    ["Females", 4069, "color: #235d9c"],
    ["Literate Persons", 6795, "#27ae60"],
    ["Males", 3630, "#235d9c"],
    ["Females", 3165, "color: #27ae60"]
  ]);
  var data26 = google.visualization.arrayToDataTable([
    ["Element", "", { role: "style" } ],
    ["Household", 2111 , "#27ae60"],
    ["Total Population", 7727, "#235d9c"],
    ["Males", 3941, "#27ae60"],
    ["Females", 3786, "color: #235d9c"],
    ["Literate Persons", 6816, "#27ae60"],
    ["Males", 3523, "#235d9c"],
    ["Females", 3293, "color: #27ae60"]
  ]);

  var view01 = new google.visualization.DataView(data01);
  view01.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view02 = new google.visualization.DataView(data02);
  view02.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view03 = new google.visualization.DataView(data03);
  view03.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view04 = new google.visualization.DataView(data04);
  view04.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view05 = new google.visualization.DataView(data05);
  view05.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view06 = new google.visualization.DataView(data06);
  view06.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view07 = new google.visualization.DataView(data07);
  view07.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view08 = new google.visualization.DataView(data08);
  view08.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view09 = new google.visualization.DataView(data09);
  view09.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view10 = new google.visualization.DataView(data10);
  view10.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view11 = new google.visualization.DataView(data11);
  view11.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view12 = new google.visualization.DataView(data12);
  view12.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view13 = new google.visualization.DataView(data13);
  view13.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view14 = new google.visualization.DataView(data14);
  view14.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view15 = new google.visualization.DataView(data15);
  view15.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view16 = new google.visualization.DataView(data16);
  view16.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view17 = new google.visualization.DataView(data17);
  view17.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view18 = new google.visualization.DataView(data18);
  view18.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view19 = new google.visualization.DataView(data19);
  view19.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view20 = new google.visualization.DataView(data20);
  view20.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view21 = new google.visualization.DataView(data21);
  view21.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view22 = new google.visualization.DataView(data22);
  view22.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view23 = new google.visualization.DataView(data23);
  view23.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view24 = new google.visualization.DataView(data24);
  view24.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view25 = new google.visualization.DataView(data25);
  view25.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);
  var view26 = new google.visualization.DataView(data26);
  view26.setColumns([0, 1,
                   { calc: "stringify",
                     sourceColumn: 1,
                     type: "string",
                     role: "annotation" },
                   2]);

  var options01 = {
    title: "Ward 1",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options02 = {
    title: "Ward 2",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options03 = {
    title: "Ward 3",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options04 = {
    title: "Ward 4",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options05 = {
    title: "Ward 5",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options06 = {
    title: "Ward 6",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options07 = {
    title: "Ward 7",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options08 = {
    title: "Ward 8",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options09 = {
    title: "Ward 9",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options10 = {
    title: "Ward 10",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options11 = {
    title: "Ward 11",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options12 = {
    title: "Ward 12",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options13 = {
    title: "Ward 13",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options14 = {
    title: "Ward 14",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options15 = {
    title: "Ward 15",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options16 = {
    title: "Ward 16",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options17 = {
    title: "Ward 17",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options18 = {
    title: "Ward 18",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options19 = {
    title: "Ward 19",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options20 = {
    title: "Ward 20",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options21 = {
    title: "Ward 21",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options22 = {
    title: "Ward 22",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options23 = {
    title: "Ward 23",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options24 = {
    title: "Ward 24",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options25 = {
    title: "Ward 25",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var options26 = {
    title: "Ward 26",
    width: 520,
    height: 400,
    bar: {groupWidth: "95%"},
    legend: { position: "none" },
  };
  var chart01 = new google.visualization.BarChart(document.getElementById("chart_ward1"));
  chart01.draw(view01, options01);

  var chart02 = new google.visualization.BarChart(document.getElementById("chart_ward2"));
  chart02.draw(view02, options02);

  var chart03 = new google.visualization.BarChart(document.getElementById("chart_ward3"));
  chart03.draw(view03, options03);

  var chart04 = new google.visualization.BarChart(document.getElementById("chart_ward4"));
  chart04.draw(view04, options04);

  var chart05 = new google.visualization.BarChart(document.getElementById("chart_ward5"));
  chart05.draw(view05, options05);

  var chart06 = new google.visualization.BarChart(document.getElementById("chart_ward6"));
  chart06.draw(view06, options06);

  var chart07 = new google.visualization.BarChart(document.getElementById("chart_ward7"));
  chart07.draw(view07, options07);

  var chart08 = new google.visualization.BarChart(document.getElementById("chart_ward8"));
  chart08.draw(view08, options08);

  var chart09 = new google.visualization.BarChart(document.getElementById("chart_ward9"));
  chart09.draw(view09, options09);

  var chart10 = new google.visualization.BarChart(document.getElementById("chart_ward10"));
  chart10.draw(view10, options10);

  var chart11 = new google.visualization.BarChart(document.getElementById("chart_ward11"));
  chart11.draw(view11, options11);

  var chart12 = new google.visualization.BarChart(document.getElementById("chart_ward12"));
  chart12.draw(view12, options12);

  var chart13 = new google.visualization.BarChart(document.getElementById("chart_ward13"));
  chart13.draw(view13, options13);

  var chart14 = new google.visualization.BarChart(document.getElementById("chart_ward14"));
  chart14.draw(view14, options14);

  var chart15 = new google.visualization.BarChart(document.getElementById("chart_ward15"));
  chart15.draw(view15, options15);

  var chart16 = new google.visualization.BarChart(document.getElementById("chart_ward16"));
  chart16.draw(view16, options16);

  var chart17 = new google.visualization.BarChart(document.getElementById("chart_ward17"));
  chart17.draw(view17, options18);

  var chart18 = new google.visualization.BarChart(document.getElementById("chart_ward18"));
  chart18.draw(view18, options18);

  var chart19 = new google.visualization.BarChart(document.getElementById("chart_ward19"));
  chart19.draw(view19, options19);

  var chart20 = new google.visualization.BarChart(document.getElementById("chart_ward20"));
  chart20.draw(view20, options20);

  var chart21 = new google.visualization.BarChart(document.getElementById("chart_ward21"));
  chart21.draw(view21, options21);

  var chart22 = new google.visualization.BarChart(document.getElementById("chart_ward22"));
  chart22.draw(view22, options22);

  var chart23 = new google.visualization.BarChart(document.getElementById("chart_ward23"));
  chart23.draw(view23, options23);

  var chart24 = new google.visualization.BarChart(document.getElementById("chart_ward24"));
  chart24.draw(view24, options24);

  var chart25 = new google.visualization.BarChart(document.getElementById("chart_ward25"));
  chart25.draw(view25, options25);

  var chart26 = new google.visualization.BarChart(document.getElementById("chart_ward26"));
  chart26.draw(view26, options26);
  }    

