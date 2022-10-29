import 'package:calculator/buttons.dart';
import 'package:flutter/material.dart';
import 'package:math_expressions/math_expressions.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: MyHomePage(),
    );
  }
}

class MyHomePage extends StatefulWidget {
  @override
  State<MyHomePage> createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {

  var userQuestion = '';
  var userAnswer = '';

  final myTextStyle = TextStyle(fontSize: 30, color: Colors.deepPurple[900]);

  final List<String> buttons = [
    'C', 'DEL', '%', '/',
    '9', '8', '7', 'X',
    '6', '5', '4', '-',
    '3', '2', '1', '+',
    '0', '.', 'ANS', '=',
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        backgroundColor: Colors.deepPurple[100],
        body: Padding(
          padding: const EdgeInsets.all(5.0),
          child: Column(
            children: <Widget>[
              // display
              Expanded(
                child: Container(
                  child: Column(
                    mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                    children: <Widget>[
                      SizedBox(height: 50,),
                      Container(
                          padding: EdgeInsets.all(20.0),
                          alignment: Alignment.centerLeft,
                          child: Text(userQuestion, style: TextStyle(fontSize: 20),)
                      ),
                      Container(
                          padding: EdgeInsets.all(20.0),
                          alignment: Alignment.centerRight,
                          child: Text(userAnswer, style: TextStyle(fontSize: 20),)
                      ),
                    ],
                  ),
                ),
              ),
              // Tools
              Expanded(
                flex: 2,
                child: Container(
                    child: GridView.builder(
                        itemCount: buttons.length,
                        gridDelegate: SliverGridDelegateWithFixedCrossAxisCount(crossAxisCount: 4),
                        itemBuilder: (BuildContext context, int index) {

                          // Clear Button
                          if(index == 0) {
                            return MyButton(
                              buttonTapped: () {
                                setState(() {
                                  userQuestion = '';
                                });
                              },
                              buttonText: buttons[index],
                              color:  Colors.green,
                              textColor: Colors.white,
                            );
                          }
                          //Delete Button
                          else if(index == 1) {
                            return MyButton(
                              buttonTapped: () {
                                setState(() {
                                  userQuestion = userQuestion.substring(0, userQuestion.length - 1);
                                });
                              },
                              buttonText: buttons[index],
                              color:  Colors.red,
                              textColor: Colors.white,
                            );
                          }

                          // Equal Button
                          else if(index == buttons.length-1) {
                            return MyButton(
                              buttonTapped: () {
                                setState(() {
                                  equalPress();
                                });
                              },
                              buttonText: buttons[index],
                              color:  Colors.deepPurple,
                              textColor: Colors.white,
                            );
                          }
                          // Sisanya
                          else {
                            return MyButton(
                              buttonTapped: () {
                                setState(() {
                                  userQuestion += buttons[index];
                                });
                              },
                              buttonText: buttons[index],
                              color: isOperator(buttons[index]) ? Colors.deepPurple : Colors.deepPurple[50],
                              textColor: isOperator(buttons[index]) ? Colors.white : Colors.deepPurple,
                            );
                          }
                        })),
              ),
            ],
          ),
        ));
  }

  bool isOperator(String x) {
    if( x == '%' || x == '/' || x == 'X' || x == '+' || x == '=' || x == '-') {
      return true;
    }
    return false;
  }
  
  void equalPress() {
    String finalQuestion = userQuestion.toString();
    finalQuestion = finalQuestion.replaceAll('X', "*");

    // You can either create an mathematical expression programmatically or parse
    // a string.
    // (1a) Parse expression:
    Parser p = Parser();

    // (1b) Build expression:
    Expression exp = p.parse(finalQuestion);
    ContextModel cm = ContextModel();

    // Bind variables and evaluate the expression as real number.
    // (2) Bind variables:
    double eval = exp.evaluate(EvaluationType.REAL, cm);

    // (3) Evaluate expression:
    userAnswer = eval.toString();
  }
}
