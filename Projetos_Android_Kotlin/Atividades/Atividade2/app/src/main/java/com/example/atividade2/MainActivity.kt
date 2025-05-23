package com.example.atividade2
import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.background
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.*
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.atividade2.ui.theme.Atividade2Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Atividade2Theme {
                    Greeting()
            }
        }
    }
}

@Composable
fun Greeting() {
    Box(
        modifier = Modifier
            .fillMaxSize()
            .background(Color(0xFF316F8B)),
        contentAlignment = Alignment.Center
    ) {
        Column(
            horizontalAlignment = Alignment.CenterHorizontally
        ) {
            Text(text = "Tênis Esportivo", fontSize = 24.sp)
            Spacer(modifier = Modifier.height(8.dp))
            Text(text = "R$ 149,90", fontSize = 20.sp)
            Spacer(modifier = Modifier.height(16.dp))
            Card(
                shape = CircleShape,
                modifier = Modifier.size(100.dp),
                colors = CardDefaults.cardColors(containerColor = MaterialTheme.colorScheme.primary)
            ) {
                Box(
                    contentAlignment = Alignment.Center,
                    modifier = Modifier.fillMaxSize()
                ) {
                    Text(text = "Comprar", color = Color.White)
                }
            }
        }
    }
}
    @Preview(showBackground = true)
    @Composable
    fun ProductCardPreview() {
        Atividade2Theme {
            Greeting()
        }
    }

