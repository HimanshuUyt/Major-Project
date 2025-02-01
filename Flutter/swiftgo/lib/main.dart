import 'package:flutter/material.dart';
import 'package:swiftgo/repository/screens/splash/SplashScreen.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({Key? key}) : super(key: key);

  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Blinkit',
      theme: ThemeData(
        colorScheme: ColorScheme.fromSeed(seedColor: Colors.deepPurple),
        useMaterial3: false
      ),
      home: SplashScreen(),
      debugShowCheckedModeBanner: false,
    );
  }
}
