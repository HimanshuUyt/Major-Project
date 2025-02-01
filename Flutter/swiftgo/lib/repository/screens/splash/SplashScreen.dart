import 'dart:async';

import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:swiftgo/domain/constants/AppColors.dart';
import 'package:swiftgo/repository/Widgets/UiHelper.dart';
import 'package:swiftgo/repository/screens/login/LoginScreen.dart';

class SplashScreen extends StatefulWidget{
  @override
  State<SplashScreen> createState() => _SplashScreenState();
}

class _SplashScreenState extends State<SplashScreen> {

  @override
  void initState() {
    super.initState();

    Timer(Duration(seconds: 3),(){
      Navigator.pushReplacement(
          context,
          MaterialPageRoute(builder: (context)=>LoginScreen())
      );
    });
  }


  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: AppColors.scaffoldbackground,
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            UiHelper.CustomImage(img: "introimg.png"),

          ],
        ),
      ),
    );
  }
}