class Node:
    def __init__(self, dataval=None):
        self.data = dataval
        self.next = None


class LinkedList:
    def __init__(self, nodeawal=None):
        self.head = nodeawal

    def print(self):
        current_node = self.head
        while current_node is not None:
            print(current_node.data)
            current_node = current_node.next

    def size(self):
        count = 0
        current_node = self.head
        while current_node is not None:
            count += 1
            current_node = current_node.next
        return count


node1 = Node(7)
node2 = Node(2)
node3 = Node(5)
node4 = Node(6)

node1.next = node2
node2.next = node3
node3.next = node4

mylinkedlist = LinkedList(node1)

mylinkedlist.print()

size = mylinkedlist.size()
print("Memiliki", size, "element")
