import 'package:flutter/material.dart';
import 'package:quotes/quote.dart';

import 'quote_card.dart';

void main() => runApp(MaterialApp(
  home: QuotesList(),
));

class QuotesList extends StatefulWidget {
  const QuotesList({Key? key}) : super(key: key);

  @override
  State<QuotesList> createState() => _QuotesListState();
}

class _QuotesListState extends State<QuotesList> {

  List<Quote> quotes = [
    Quote(author: "anonym", text: 'Be yourself! everyone else is already  taken'),
    Quote(author: "anonym", text: 'I have nothing to declare except my genius'),
    Quote(author: "anonym", text: 'The truth is rarely pure an never simple'),
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.grey[200],
      appBar: AppBar(
        title: Text("Awsome Quotes"),
        centerTitle: true,
        backgroundColor: Colors.redAccent,
      ),
      body: Column(
        children: quotes.map((quote) => QuoteCard(
            quote: quote,
            delete: () {
              setState(() {
                quotes.remove(quote);
              });
            }
        )).toList(),
      ),
    );
  }
}