
var g = {
  nodes: [],
  edges: []
};

g.nodes.push({
  id: "n" + 1,
  label: "",
  x: Math.random(),
  y: Math.random(),
  size: 20,
  color: getRandomColor()
});

g.nodes.push({
  id: "n" + 2,
  label: "",
  x: Math.random(),
  y: Math.random(),
  size: 20,
  color: getRandomColor()
});

g.edges.push({
  id: "e" + 1,
  source: "n" + 1,
  target: "n" + 2,
  size: Math.random(),
  color: "#ccc"
});

function getRandomColor() {
  var letters = "0123456789ABCDEF";
  var color = "#";
  for (var i = 0; i < 6; i++) {
    color += letters[Math.floor(Math.random() * 16)];
  }
  return color;
}

// Instantiate sigma:
s = new sigma({
  graph: g,
  settings: {
    enableHovering: false
  }
});

s.addRenderer({
  id: "main",
  type: "svg",
  container: document.getElementById("graph-container"),
  freeStyle: true
});

s.refresh();

// Binding silly interactions
function mute(node) {
  if (!~node.getAttribute("class").search(/muted/))
    node.setAttributeNS(null, "class", node.getAttribute("class") + " muted");
}

function unmute(node) {
  node.setAttributeNS(
    null,
    "class",
    node.getAttribute("class").replace(/(\s|^)muted(\s|$)/g, "$2")
  );
}

$(".sigma-node").click(function() {
  // Muting
  $(".sigma-node, .sigma-edge").each(function() {
    mute(this);
  });

  // Unmuting neighbors
  var neighbors = s.graph.neighborhood($(this).attr("data-node-id"));
  neighbors.nodes.forEach(function(node) {
    unmute($('[data-node-id="' + node.id + '"]')[0]);
  });

  neighbors.edges.forEach(function(edge) {
    unmute($('[data-edge-id="' + edge.id + '"]')[0]);
  });
});

s.bind("clickStage", function() {
  $(".sigma-node, .sigma-edge").each(function() {
    unmute(this);
  });
});
