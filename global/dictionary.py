g = open('dict.xml','r+')
r = open('new.txt', 'r+')
n = 1
while(1):
    for x in list(r.read().split('\n')):
        g.write('<f'+str(n)+'>'+x+'</f'+str(n)+'>'+'\n')
        g.flush()
        n = n+1
    break