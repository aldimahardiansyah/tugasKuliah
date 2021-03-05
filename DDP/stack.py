class Node:
    def __init__(self, data=None):
        self.data = data
        self.next = None


class Stack:
    def __init__(self):
        self.top = None

    def peek(self):
        return self.top

    def push(self, new_data):
        new_node = Node(new_data)
        if self.top is not None:
            new_node.next = self.top
        self.top = new_node

    def pop(self):
        if self.top is None:
            return None
        else:
            current_top = self.top
            self.top = self.top.next
            current_top.next = None
            return current_top


mystack = Stack()
mystack.push(9)
mystack.push(10)

pop_val = mystack.pop()
mystack.push(15)
mystack.push(13)
print('pop val =', pop_val.data)
print('top val =', mystack.peek().data)
