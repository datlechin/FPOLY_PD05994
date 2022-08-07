package Lab8;

public class FPoly {
    public static double min(int ... a) {
        double min = a[0];
        for (double j : a) {
            min = Math.min(min, j);
        }
        return min;
    }

    public static double max(int ... a) {
        double max = a[0];
        for (double j : a) {
            max = Math.max(max, j);
        }
        return max;
    }

    public static double sum(int ... a) {
        double sum = 0;
        for (double j : a) {
            sum += j;
        }
        return sum;
    }

    public static String toUpperFirstChar(String string) {
        String[] words = string.split(" ");

        for (String word : words) {
            char firstChar = word.charAt(0);
            String upperFirstChar = Character.toUpperCase(firstChar) + word.substring(1);
            string = string.replace(word, upperFirstChar);
        }

        return string;
    }
}
