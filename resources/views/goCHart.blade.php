<!DOCTYPE html>
<html>
<head>
  <title>Minimal GoJS Sample</title>
  <!-- Copyright 1998-2022 by Northwoods Software Corporation. -->
</head>
<body>
  <div id="myDiagramDiv" style="border: solid 1px black; width:100%; height:600px"></div>

  <script src="https://unpkg.com/gojs"></script>
  <script id="code">
const $ = go.GraphObject.make;

const myDiagram =
  $(go.Diagram, "myDiagramDiv",
    {
      layout: $(go.TreeLayout, { angle: 90, setsPortSpot: false, setsChildPortSpot: false })
    });

myDiagram.nodeTemplate =
  $(go.Node, "Auto",
    $(go.Shape, { fill: "white" }),
    $(go.Panel, "Table",
      {
        margin: 0.5,
        defaultSeparatorPadding: new go.Margin(7, 9, 5, 9),
        defaultRowSeparatorStroke: "black",
        defaultColumnSeparatorStroke: "black"
      },
      $(go.RowColumnDefinition, { column: 0, background: "white", coversSeparators: true }),
      $(go.TextBlock, { row: 0, rowSpan: 2, column: 0, width: 100, textAlign: "center" },
        new go.Binding("text")),
      $(go.TextBlock, "Nama", { row: 0, column: 1 }),
      $(go.TextBlock, { row: 1, column: 1 },
        new go.Binding("text", "existing")),
    //   $(go.TextBlock, "Needs", { row: 0, column: 2 }),
    //   $(go.TextBlock, { row: 1, column: 2 },
    //     new go.Binding("text", "needs"))
    )
  );

myDiagram.linkTemplate =
  $(go.Link,
    {
      routing: go.Link.Orthogonal,
      fromSpot: new go.Spot(0.001, 1, 60, 0),
      toSpot: new go.Spot(0.001, 0, 60, 0)
    },
    $(go.Shape)
  );

myDiagram.model = new go.TreeModel(
[
  { key: 1, text: "CEO", existing: "asdasd"},
  { key: 2, parent: 1, text: "IT Manager", existing: 1 },
  { key: 3, parent: 2, text: "React Developer", existing: 1 },
  { key: 4, parent: 3, text: "RDBMS Dev", existing: 2 },
  { key: 5, parent: 1, text: "Marketing Manager", existing: 1 },
  { key: 6, parent: 5, text: "Sales", existing: 2 },
]);
  </script>
</body>
</html>
