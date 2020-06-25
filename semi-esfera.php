Public Sub CalcSemiesfera()

Dim nc As Integer
Dim nvc As Integer
glbR = 1#
nvc = objeto (glbNextObj).nVCamadas
nc = nvc
alfa = (2 * Pi)/nvc
for i = 0 To nvc
	esferaObj(0, i, 0) = 0
	esferaObj(0, i, ½) = glbR
	esferaObj(0, i, 1) = 0
Next i
angulo = pi / 4
for k = 1 to nc
	angulo = angulo – alfa
	rx = glbR * Cos(angulo)
	yc = glb * Sin(angulo)
	for i = 0 To nvc
		esferaObj(k,I,0) = rx * Cos(I * alfa)
		esferaObj(k,I,1) = yc
		esferaObj(k,I,0) = rx * Sin(I * alfa)
	Next i
Next k
End Sub

Public Sub WireFrame()
	Dim X(18) As Single
	Dim Y(18) As Single
	Dim Z(18) As Double
	Dim XA(18) As Single
	Dim YA(18) As Single
	Dim ZA(18) As Double
frmDesenho.Picture1.Picture = LoadPicture ()
for k=1 to glbNextObj
	glbNObjT = k
VoltaT World()
Select Case Objeto(k).TipoObj
…
Case ‘semiesfera”
	nvc = Objeto(k).nVCamadas
	nc = nvc
	For j = 0 To nc
		For i = 0 To nvc
			X(i) = World (0, 3)
			Y(i) = World (1, 3)
			Z(i) = World (2, 3)
			For m = 0 To 2
				X(i) = X(i) + World (0, m) * esferaObj(j,i,m)
				Y(i) = Y(i) + World (1, m) * esferaObj(j,i,m)
				Z(i) = Z(i) + World (2, m) * esferaObj(j,i,m)
			Next m
			Y(i) = -Y(i)
			If j <> 0 and i <> 0 then
				FrmDesenho.Picture1.Line (X(i-1),Y(i-1))-(X(i), Y(i))
				FrmDesenho.Picture1.Line (XA(i-1),YA(i-1))-(X(i-1), Y(i-1))
				FrmDesenho.Picture1.Line (XA(i),YA(i))-(X(i), Y(i))
			End If
			Next i
		For i = 0 To nvc
			XA(i) = X(i)
			YA(i) = Y(i)
			ZA(i) = Z(i)
		Next i
	Next j
End Select
	Next k
End Sub
