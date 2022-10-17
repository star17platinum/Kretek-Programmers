import 'package:flutter/material.dart';

void main() => runApp(MaterialApp(home: MyID()));

class MyID extends StatefulWidget{
  const MyID({Key? key}) : super(key: key);

  @override
  State<MyID> createState() => _MyIDState();
}

class _MyIDState extends State<MyID> {
  int idLevel = 0;

  void increLevel() {
    setState(() {
      idLevel += 1;
    });
  }

  @override
  Widget build(BuildContext context) {
   return Scaffold(
     backgroundColor: Colors.grey[900],
     appBar: AppBar(
       title: Text("Flutter Ground"),
       centerTitle: true,
       automaticallyImplyLeading: false,
       backgroundColor: Colors.grey[850],
       elevation: 0.0,
     ),
     body: Padding(
       padding: EdgeInsets.fromLTRB(30.0, 40.0, 30.0, 0.0),
       child: Column(
         crossAxisAlignment: CrossAxisAlignment.start,
         children: [
           Center(
             child: CircleAvatar(
               backgroundImage: AssetImage('assets/dummyPP.jpg'),
               radius: 50.0,
             ),
           ),
           Divider(
             height: 80.0,
             color: Colors.grey[800],
           ),
           Text(
             "NAME",
             style: TextStyle(
                 color: Colors.grey,
                 letterSpacing: 2.0
             ),
           ),
          SizedBox(height: 10.0),
           Text(
             "Ismail Nur Alam",
             style: TextStyle(
                 color: Colors.amberAccent[200],
                 letterSpacing: 2.0,
                 fontSize: 25.0,
                 fontWeight: FontWeight.bold
             ),
           ),
           SizedBox(height: 20.0),
           Text(
             "CURRENT NINJA LEVEL",
             style: TextStyle(
               color: Colors.grey,
               letterSpacing: 2.0
             ),
           ),
          SizedBox(height: 10.0),
           Text(
             "$idLevel",
             style: TextStyle(
               color: Colors.amberAccent[200],
               letterSpacing: 2.0,
               fontSize: 25.0,
               fontWeight: FontWeight.bold
             ),
           ),
           SizedBox(height: 20.0),
           Text(
             "EMAIL",
             style: TextStyle(
               color: Colors.grey,
               letterSpacing: 2.0
             ),
           ),
          SizedBox(height: 10.0),
           Text(
             "ismail@imaco.com",
             style: TextStyle(
               color: Colors.amberAccent[200],
               letterSpacing: 2.0,
               fontSize: 25.0,
               fontWeight: FontWeight.bold
             ),
           ),
         ],
       ),
     ),
     floatingActionButton: FloatingActionButton(
       onPressed: () => increLevel(),
       child: Icon(Icons.add),
       backgroundColor: Colors.grey[850],
       hoverColor: Colors.indigo,
       tooltip: "Tambah level mu",
     ),
     floatingActionButtonLocation: FloatingActionButtonLocation.centerFloat,
   );
  }
}