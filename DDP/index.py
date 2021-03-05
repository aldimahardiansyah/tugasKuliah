class Node:
    def __init__(self, data=None, next=None):
        self.data = data
        self.next = next


class LinkedList:
    def __init__(self, head=None):
        self.head = head

    def add_last(self, new_data):
        if self.head is None:
            self.head = Node(new_data)
        else:
            current = self.head
            while current.next is not None:
                current = current.next
            current.next = Node(new_data)

    def cetak(self):
        if self.head is None:
            print('List kosong')
        else:
            current = self.head
            while current is not None:
                print(current.data, end=' ')
                current = current.next
            print()

    def sum_odd(self):
        odd = 0
        if self.head is not None:
            current = self.head
            while current is not None:
                if (current.data % 2) == 1:
                    odd += current.data
                current = current.next
        return odd

    def get_max(self):
        if self.head is not None:
            gmax = 0
            current = self.head
            while current is not None:
                if current.data > gmax:
                    gmax = current.data
                current = current.next
            return gmax
        else:
            return None


nilai1 = LinkedList()

nilai1.add_last(1)
nilai1.add_last(2)
nilai1.add_last(3)
nilai1.add_last(4)
nilai1.add_last(5)

print(nilai1.sum_odd())
print(nilai1.get_max())
