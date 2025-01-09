package com.example.swiftgo.Activity;

import android.content.Intent;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.widget.Button;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

import com.example.swiftgo.R;
import com.example.swiftgo.utlits.ConstantData;

public class HomeActivity extends AppCompatActivity {

    TextView tvEmail;
    Button btnLogout;
    SharedPreferences sp;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_home);
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });

        tvEmail= findViewById(R.id.tvEmail);
        btnLogout = findViewById(R.id.btnLogout);

        sp = getSharedPreferences(ConstantData.SP_NAME,MODE_APPEND);
        String email = sp.getString(ConstantData.SP_EMAIL,"");
        tvEmail.setText("Hello "+email);

        btnLogout.setOnClickListener(v -> {
            SharedPreferences.Editor ed = sp.edit();
            ed.clear();
            ed.apply();

            Intent intent = new Intent(HomeActivity.this, LoginActivity.class);
            startActivity(intent);
            finish();
        });

//        bnvhome= findViewById(R.id.bnvHome);
//        bnvhome.setOnNavigationItemSelectedListener(new BottomNavigationView.OnNavigationItemSelectedListener() {
//            @Override
//            public boolean onNavigationItemSelected(@NonNull MenuItem item) {
//                if (item.getItemId() == R.id.menu_home){
//                    addFragment(new HomeFragment());
//                } else if (item.getItemId() == R.id.menu_search) {
//                    addFragment(new SearchFragment());
//                } else if (item.getItemId() == R.id.menu_cart) {
//                    addFragment(new CartFragment());
//                }else
//                    addFragment(new ProfileFragment());
//                return true;
//            }
//        });
//    }
//
//    public void  addFragment(Fragment fragment){
//        FragmentManager fm  = getSupportFragmentManager();
//        FragmentTransaction ft= fm.beginTransaction();
//        ft.add(R.id.frame,fragment,null);
//        ft.commit();
    }
}