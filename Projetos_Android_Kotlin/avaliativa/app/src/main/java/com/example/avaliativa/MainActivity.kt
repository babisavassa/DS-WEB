package com.example.avaliativa

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.navigation.compose.NavHost
import androidx.navigation.compose.composable
import androidx.navigation.compose.rememberNavController
import com.example.avaliativa.ui.theme.AvaliativaTheme
import com.example.avaliativa.HomeScreen

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
           AvaliativaTheme {

                var navController = rememberNavController()

                NavHost(navController = navController, startDestination = "login") {
                    composable(route = "login") {
                        LoginScreen(navController)
                    }
                    composable(route= "home") {
                        HomeScreen(navController)
                    }
                }
            }
        }
    }
}

