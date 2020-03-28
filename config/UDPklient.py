# UDP Client
# Anders Nelsson BTH
# Exempel från kursbok

from socket import *
#serverName = 'hostname'
serverName = '192.168.1.10'
serverPort = 12000

# create UDP socket
clientSocket = socket(AF_INET, SOCK_DGRAM)

# get input from keyboard
message = input('Input lowercase sentence:')

# send sentence to socket; server and port number required
# need to convert message from string to bytes for Python 3
clientSocket.sendto(message.encode(),(serverName, serverPort))

# receive the modified sentence in upper case letters from server
modifiedMessage, serverAddress = clientSocket.recvfrom(2048)

# output modified sentence and close the socket, cast message to string
print ("Received from server: ", modifiedMessage.decode())

# close UDP socket
clientSocket.close()
