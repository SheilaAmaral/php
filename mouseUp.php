Private Sub Picture1_MouseUp(Button As Integer, Shift As Integer, X As Single, Y As Single)
       X2 = X
       Y2 = Y
       Picture1.AutoRedraw = True
       Select Case glbFerrSelec
       ...
       Case “n”
                DX = (X2 - X1) / 4
                DY = (Y2 - Y1) / 2
                XA = X1
                YA = Y1 + DY
                XB = X1 + 2 * DX
                YB = Y1
                XC = X2
                YC = YA
                XD = X2 - DX
                YD = Y2
                XE = X1 + DX
                YE = Y2
                Picture1.Line (XA, YA)-(XB, YB), glbLcolor
                Picture1.Line (XB, YB)-(XC, YC), glbLcolor
                Picture1.Line (XC, YC)-(XD, YD), glbLcolor
                Picture1.Line (XD, YD)-(XE, YE), glbLcolor
                Picture1.Line (XE, YE)-(XA, YA), glbLcolor
       End Select
End Sub
