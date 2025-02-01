import 'package:flutter/material.dart';
import 'package:swiftgo/repository/Widgets/UiHelper.dart';
import 'package:swiftgo/repository/screens/bottomNav/bottomNavScreen.dart';

class LoginScreen extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: SafeArea( // Ensures content avoids system UI areas
        child: SingleChildScrollView( // Makes the content scrollable
          child: Padding(
            padding: const EdgeInsets.symmetric(horizontal: 16.0),
            child: Column(
              mainAxisAlignment: MainAxisAlignment.center,
              crossAxisAlignment: CrossAxisAlignment.center,
              children: [
                UiHelper.CustomImage(img: "Blinkit Onboarding Screen.png"),
                SizedBox(height: 30),
                UiHelper.CustomImage(img: "image 10.png"),
                SizedBox(height: 20),
                UiHelper.CustomText(
                  text: "India’s last minute app",
                  color: Colors.black,
                  fontweight: FontWeight.bold,
                  fontsize: 20,
                  fontfamily: "bold",
                ),
                SizedBox(height: 20),
                Card(
                  elevation: 4,
                  shape: RoundedRectangleBorder(
                      borderRadius: BorderRadius.circular(10)),
                  child: Container(
                    padding: const EdgeInsets.all(16.0),
                    width: MediaQuery.of(context).size.width * 0.9, // Responsive width
                    decoration: BoxDecoration(
                      borderRadius: BorderRadius.circular(10),
                      color: Colors.white,
                    ),
                    child: Column(
                      crossAxisAlignment: CrossAxisAlignment.center,
                      children: [
                        SizedBox(height: 20),
                        UiHelper.CustomText(
                          text: "Himanshu", // Replace with dynamic data
                          color: Colors.black,
                          fontweight: FontWeight.w500,
                          fontsize: 14,
                        ),
                        SizedBox(height: 5),
                        UiHelper.CustomText(
                          text: "93280XXXXX", // Placeholder phone number
                          color: Colors.grey,
                          fontweight: FontWeight.bold,
                          fontsize: 14,
                          fontfamily: "bold",
                        ),
                        SizedBox(height: 20),
                        SizedBox(
                          height: 48,
                          width: double.infinity,
                          child: ElevatedButton(
                            onPressed: () {
                              Navigator.push(
                                  context,
                                  MaterialPageRoute(
                                      builder: (context)=> BottomNavScreen()
                                  )
                              );
                            }, // Add login logic here
                            style: ElevatedButton.styleFrom(
                              backgroundColor: Color(0XFFE23744),
                              shape: RoundedRectangleBorder(
                                borderRadius: BorderRadius.circular(10),
                              ),
                            ),
                            child: Row(
                              mainAxisAlignment: MainAxisAlignment.center,
                              children: [
                                UiHelper.CustomText(
                                  text: "Login With",
                                  color: Colors.white,
                                  fontweight: FontWeight.bold,
                                  fontsize: 14,
                                  fontfamily: "bold",
                                ),
                                SizedBox(width: 5),
                                UiHelper.CustomImage(img: "image 9.png"),
                              ],
                            ),
                          ),
                        ),
                        SizedBox(height: 8),
                        UiHelper.CustomText(
                          text: "Access your saved addresses from Zomato automatically!",
                          color: Colors.grey,
                          fontweight: FontWeight.normal,
                          fontsize: 10,
                        ),
                        SizedBox(height: 15),
                        UiHelper.CustomText(
                          text: "or login with phone number",
                          color: Color(0xFF269237),
                          fontweight: FontWeight.normal,
                          fontsize: 14,
                        ),
                      ],
                    ),
                  ),
                ),
                SizedBox(height: 20), // Extra spacing for scrollability
              ],
            ),
          ),
        ),
      ),
    );
  }
}
