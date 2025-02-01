import 'package:flutter/material.dart';
import '../../Widgets/UiHelper.dart';

class CategoryScreen extends StatelessWidget {

  TextEditingController searchController = TextEditingController();
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Column(
        children: [
          SizedBox(height: 40),
          Stack(
            children: [
              Container(
                height: 190,
                width: double.infinity,
                color: Color(0XFFF7CB45),
                child: Column(
                  children: [
                    SizedBox(
                      height: 30,
                    ),
                    Row(
                      children: [
                        SizedBox(
                          width: 20,
                        ),
                        UiHelper.CustomText(
                            text: "Blinkit in",
                            color: Color(0XFF000000),
                            fontweight: FontWeight.bold,
                            fontsize: 15,
                            fontfamily: "bold"),
                      ],
                    ),
                    Row(
                      children: [
                        SizedBox(
                          width: 20,
                        ),
                        UiHelper.CustomText(
                            text: "16 minutes",
                            color: Color(0XFF000000),
                            fontweight: FontWeight.bold,
                            fontsize: 20,
                            fontfamily: "bold")
                      ],
                    ),
                    Row(
                      children: [
                        SizedBox(
                          width: 20,
                        ),
                        UiHelper.CustomText(
                            text: "HOME ",
                            color: Color(0XFF000000),
                            fontweight: FontWeight.bold,
                            fontsize: 14),
                        UiHelper.CustomText(
                            text: "- Himanshu, Gauravpath Road, Surat",
                            color: Color(0XFF000000),
                            fontweight: FontWeight.bold,
                            fontsize: 14)
                      ],
                    ),
                  ],
                ),
              ),
              Positioned(
                right: 20,
                bottom: 100,
                child: CircleAvatar(
                  radius: 15,
                  backgroundColor: Colors.white,
                  child: Icon(
                    Icons.person,
                    color: Colors.black,
                    size: 20,
                  ),
                ),
              ),
              Positioned(
                  bottom: 30,
                  left: 20,
                  child: UiHelper.CustomTextField(controller: searchController))
            ],
          ),
        ],
      ),
    );
  }
}
