package com.example.projeto1
import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.background
import androidx.compose.foundation.layout.*
import androidx.compose.material3.*
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.projeto1.ui.theme.Projeto1Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Projeto1Theme{
                ContactCardApp()
            }
        }
    }
}

@Composable
fun ContactCardApp() {
    Box(
        modifier = Modifier
            .fillMaxSize()
            .background(Color(0xFF5D3961)) // Cor de fundo da tela
            .padding(16.dp)
    ) {
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally,
            modifier = Modifier.fillMaxSize()
        ) {
            ContactCard("Maria Silva", "(11) 99999-9999", "maria@email.com")
            Spacer(modifier = Modifier.height(24.dp))
            ContactCard("João Souza", "(21) 98888-8888", "joao@email.com")
        }
    }
}

@Composable
fun ContactCard(name: String, phone: String, email: String) {
    Card(
        colors = CardDefaults.cardColors(containerColor = Color(0xFFFFFFFF)), // Branco
        modifier = Modifier
            .fillMaxWidth()
            .padding(8.dp)
    ) {
        Column(
            modifier = Modifier
                .fillMaxWidth()
                .padding(16.dp), // Espaço interno
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ) {
            Text(text = name, fontSize = 20.sp, color = Color.Black)
            Text(text = phone, fontSize = 16.sp, color = Color.DarkGray)
            Text(text = email, fontSize = 16.sp, color = Color.DarkGray)
        }
    }
}

@Preview(showBackground = true)
@Composable
fun ContactCardAppPreview() {
    ContactCardApp()
}

