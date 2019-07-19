/*
----------------------------------------------------------------
| El algoritmo comienza con la inicializacion de un grafo que  |
| Se encargue de ser procesado por la funcion que ejecutara    |
| el algoritmo de Dijkstra y buscara la ruta mas corta entre   |
| las diferentes calles de guayaquil.                          |
----------------------------------------------------------------
*/

$(document).ready(function() {
  console.log(dijkstra(problem));
  graphRandom();
});

const problem = {
  start: {
    A: 6,
    B: 7
  },
  A: {
    C: 3,
    D: 2
  },
  B: {
    A: 8,
    D: 10
  },
  C: {
    D: 5,
    finish: 8
  },
  D: {
    finish: 2
  },
  finish: {}
};

/*
----------------------------------------------------------------
| Esta funcion se encargara de buscar el nodo con el menor     |
| costo revisando por medio de preguntas los nodos adyacentes  |
----------------------------------------------------------------
*/

const lowestCostNode = (costs, processed) => {
  return Object.keys(costs).reduce((lowest, node) => {
    if (lowest === null || costs[node] < costs[lowest]) {
      if (!processed.includes(node)) {
        lowest = node;
      }
    }
    return lowest;
  }, null);
};

/*
----------------------------------------------------------------
| La siguiente funcion recibira como dato un grafo que sera    |
| procesado para que se ejecute el algoritmo y devuelva el     |
| camino mas corto ademas del precio de la ruta escogida       |
----------------------------------------------------------------
*/

// Esta funcion se encarga de devolver el costo minimo del camino y su recorrido
const dijkstra = graph => {
  // Revisa el menor costo para cada nodo
  const costs = Object.assign(
    {
      finish: Infinity
    },
    graph.start
  );

  // Revisa los nodos para saber direcciones
  const parents = {
    finish: null
  };
  for (let child in graph.start) {
    parents[child] = "start";
  }

  // Revisa los nodos que ya fueron procesados
  const processed = [];

  let node = lowestCostNode(costs, processed);

  while (node) {
    let cost = costs[node];
    let children = graph[node];
    for (let n in children) {
      let newCost = cost + children[n];
      if (!costs[n]) {
        costs[n] = newCost;
        parents[n] = node;
      }
      if (costs[n] > newCost) {
        costs[n] = newCost;
        parents[n] = node;
      }
    }
    processed.push(node);
    node = lowestCostNode(costs, processed);
  }

  let optimalPath = ["finish"];
  let parent = parents.finish;
  while (parent) {
    optimalPath.push(parent);
    parent = parents[parent];
  }
  optimalPath.reverse();

  const results = {
    distance: costs.finish,
    path: optimalPath
  };

  return results;
};

function graphRandom() {
  var i,
    s,
    N = 10,
    E = 30,
    g = {
      nodes: [],
      edges: []
    };

  // Generate a random graph:
  for (i = 0; i < N; i++)
    g.nodes.push({
      id: "n" + i,
      label: "Node " + i,
      x: Math.random(),
      y: Math.random(),
      size: Math.random(),
      color: "#666"
    });

  for (i = 0; i < E; i++)
    g.edges.push({
      id: "e" + i,
      source: "n" + ((Math.random() * N) | 0),
      target: "n" + ((Math.random() * N) | 0),
      size: Math.random(),
      color: "#ccc"
    });

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
}

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
