package com.example.calculatorfriend;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    EditText etScore, etTotal;
    Button btnCalculate;
    TextView tvPercentage, tvResult;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        etScore = findViewById(R.id.etScore);
        etTotal = findViewById(R.id.etTotal);
        btnCalculate = findViewById(R.id.btnCalculate);
        tvPercentage = findViewById(R.id.tvPercentage);
        tvResult = findViewById(R.id.tvResult);

        btnCalculate.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                String scoreStr = etScore.getText().toString();
                String totalStr = etTotal.getText().toString();

                if (scoreStr.isEmpty() || totalStr.isEmpty()) {
                    Toast.makeText(MainActivity.this, "Please enter both values", Toast.LENGTH_SHORT).show();
                    return;
                }

                int score = Integer.parseInt(scoreStr);
                int total = Integer.parseInt(totalStr);

                if (total == 0) {
                    Toast.makeText(MainActivity.this, "Total items cannot be zero!", Toast.LENGTH_SHORT).show();
                    return;
                }

                double percentage = (double) score / total * 100;

                tvPercentage.setText("Percentage: " + String.format("%.2f", percentage) + "%");

                if (percentage >= 75) {
                    tvResult.setText("Pasado!");
                    tvResult.setTextColor(getResources().getColor(android.R.color.holo_green_dark));
                } else {
                    tvResult.setText("Sayang!");
                    tvResult.setTextColor(getResources().getColor(android.R.color.holo_red_dark));
                }
            }
        });
    }
}
