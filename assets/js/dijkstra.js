$(document).ready(function() {
  let path = require("ngraph.path");
  let pathFinder = path.aStar(graph); // graph is https://github.com/anvaka/ngraph.graph

  // now we can find a path between two nodes:
  let fromNodeId = 40;
  let toNodeId = 42;
  let foundPath = pathFinder.find(fromNodeId, toNodeId);
  console.log(foundPath);
  // foundPath is array of nodes in the graph
  let inicio = $("#inicio").value;
  let final = $("#final").value;

  grafo = inicializarGrafo();
  console.log(dijkstra(grafo));

  const Ruta1 = {
    A: 5,
    B: 2
  };

  const grafo2 = {
    UEES: { A: 5, B: 2 },
    A: { C: 4, D: 2 },
    B: { A: 8, D: 7 },
    C: { D: 6, metaUEES: 3 },
    D: { metaUEES: 1 },
    metaUEES: grafo1
  };

  console.log(grafo2);
});

/*
------------------------------------Funciones------------------------------
*/

const inicializarGrafo = () => {
  const grafo = {
    UEES: { A: 5, B: 2 },
    A: { C: 4, D: 2 },
    B: { A: 8, D: 7 },
    C: { D: 6, metaUEES: 3 },
    D: { metaUEES: 1 },
    metaUEES: {}
  };

  return grafo;
};

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

// function that returns the minimum cost and path to reach metaUEES
const dijkstra = graph => {
  // track lowest cost to reach each node
  const costs = Object.assign({ metaUEES: Infinity }, graph.UEES);

  // track paths
  const parents = { metaUEES: null };
  for (let child in graph.UEES) {
    parents[child] = "UEES";
  }

  // track nodes that have already been processed
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

  let optimalPath = ["metaUEES"];
  let parent = parents.metaUEES;
  while (parent) {
    optimalPath.push(parent);
    parent = parents[parent];
  }
  optimalPath.reverse();

  const results = {
    distance: costs.metaUEES,
    path: optimalPath
  };

  return results;
};
