#cv2 this library from Python
import cv2

#img this to call image in folder
img = cv2.imread('jokowi.jpeg')

#sobelX declar Horizonzal and calculation sobel
sobelX = cv2.Sobel(img, cv2.CV_64F, 0, 1, ksize=5)
#sobely declar vertical and calculation sobel
sobelY = cv2.Sobel(img, cv2.CV_64F, 1, 0, ksize=5)

#This code to declar Canny
edge = cv2.Canny(img, 70, 70)
#This code sobelOR to declar Sobel and call sobelX(horizontal) and sobelY(Vertical)
sobelOR = cv2.bitwise_or(sobelX, sobelY)

#imshow this to display image through teh window
#This Canny image window
cv2.imshow('Detection Canny', edge)
#This Sobel image Window
cv2.imshow('Detection Sobel', sobelOR)
#This original image window
cv2.imshow('Original', img)

#This code to waiting next command its like waiting to press esc adter run code
cv2.waitKey(0)
#This code to close a specific window
cv2.destroyAllWindows()