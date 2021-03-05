class Graph:
    def __init__(self):
        self.graph = {}

    def add_edge(self, u, v=None):
        adjlist = self.graph.setdefault(u, [])
        if v is not None:
            adjlist.append(v)

    def cetak(self):
        for u in self.graph.keys():
            print(str(u) + ': ', end='')
            if len(self.graph[u]) == 0:
                print('-')
            else:
                for i in range(len(self.graph[u])):
                    print(self.graph[u][i], end='')
                    if i != len(self.graph[u]) - 1:
                        print(', ', end='')
                    else:
                        print()


g = Graph()
g.add_edge('A', 'C')
g.add_edge('A', 'D')
g.add_edge('B', 'A')
g.add_edge('C', 'B')
g.add_edge('D', 'E')
g.add_edge('E')
g.cetak()
