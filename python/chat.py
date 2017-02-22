import json
import sys

if len(sys.argv) < 2:
  sys.exit(0)

message = sys.argv[1]
result = message
print ("%s" % result)
