import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:swiftgo/repository/Widgets/UiHelper.dart';
import 'package:swiftgo/repository/screens/Cart/CartScreen.dart';
import 'package:swiftgo/repository/screens/Category/CategoryScreen.dart';
import 'package:swiftgo/repository/screens/Home/HomeScreen.dart';
import 'package:swiftgo/repository/screens/Print/PrintScreen.dart';

class BottomNavScreen extends StatefulWidget{
  @override
  State<BottomNavScreen> createState() => _BottomNavScreenState();
}

class _BottomNavScreenState extends State<BottomNavScreen> {

  int currentIndex = 0;
  List<Widget>pages = [
    HomeScreen(),
    CartScreen(),
    CategoryScreen(),
    PrintScreen()
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: IndexedStack(
        index: currentIndex,
        children: pages,
      ),
      bottomNavigationBar: BottomNavigationBar(items: [
        BottomNavigationBarItem(icon: UiHelper.CustomImage(img: "home.png"), label: "Home"),
        BottomNavigationBarItem(icon: UiHelper.CustomImage(img: "cart.png"), label: "Cart"),
        BottomNavigationBarItem(icon: UiHelper.CustomImage(img: "category.png"), label: "Categories"),
        BottomNavigationBarItem(icon: UiHelper.CustomImage(img: "printer.png"), label: "Print"),
      ],type: BottomNavigationBarType.fixed,
        currentIndex: currentIndex,
        onTap: (index){
        setState(() {
          currentIndex = index;
        });
        },
      ),
    );
  }
}