<html>
    <head><title> Carpet Estimate</title></head>
    <Body>
        <font size=5 color="BLUE"> Carpet Cost Estimator! </font>
        <form action="CalculateCost.php" METHOD="POST">
            <table>
                <tr><td>Carpet grade:</td>
                    <td><INPUT type="radio" name="grade" value="1">Best Quality</td>
                    <td><INPUT type="radio" name="grade" value="2">Extra Value</td>
                </tr>
                <tr>
                    <td>Room width (in m2):</td>
                    <td colspan="2"><input type="text" name="width" size="4" maxlength="4"></td>
                </tr>
                <tr>
                    <td>Room lenth (in m2):</td>
                    <td colspan="2"><input type="text" name="length" size="4" maxlength="4"></td>
                </tr>
                <tr>
                    <td align="right"> <input type="SUBMIT" value="Submit"></td>
                    <td align="left"> <input type="RESET" value="Reset"></td>
                </tr>
            </table>
        </form>
    </Body>
</html>