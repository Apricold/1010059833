import React from "react";
import { createBottomTabNavigator } from "@react-navigation/bottom-tabs";
import { NavigationContainer } from "@react-navigation/native";
import { AntDesing } from "@expo/vector-icons";
import Sesion from "./Sesion";
import Usuarios from "./Usuarios";
const Tab = createBottomTabNavigator();
function MyTabs() {
  return (
    <Tab.Navigator>
      <Tab.Screen name="Iniciar sesion" component={Sesion} />
      <Tab.Screen name="Usuarios" component={Usuarios} />
    </Tab.Navigator>
  );
}

export default function Enrutamiento() {
  return (
    <NavigationContainer>
      <MyTabs />
    </NavigationContainer>
  );
}
