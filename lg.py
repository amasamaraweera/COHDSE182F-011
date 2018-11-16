import pymongo
client=pymongo.MongoClient("mongodb://localhost:27017/")
db=client["test"]
collection=db["login"]

uname=input("ENTER YOUR USER NAME: ")
pwd=input("ENTER YOUR PASSWORD: ")
for x in collection.find({},{"uname":1,"pwd":1}):
                             name=str(x["uname"])
pw=str(x["pwd"])
if uname==name and pwd==pw:
    print("login successful")
else:
        print("login unsuccessful")
