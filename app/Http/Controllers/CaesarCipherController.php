<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaesarCipherController extends Controller
{
    public function index()
    {
        return view('caesar-cipher.index');
    }

    public function encrypt(Request $request)
    {
        $shift = $request->input('shift');
        $plaintext = $request->input('text');

        $ciphertext = $this->caesarCipher($plaintext, $shift, 'encrypt');

        return view('caesar-cipher.result', compact('plaintext', 'ciphertext', 'shift'));
    }

    public function decrypt(Request $request)
    {
        $shift = $request->input('shift');
        $ciphertext = $request->input('text');

        $plaintext = $this->caesarCipher($ciphertext, $shift, 'decrypt');

        return view('caesar-cipher.result', compact('plaintext', 'ciphertext', 'shift'));
    }

    public function process(Request $request)
    {
        $shift = $request->input('shift');
        $text = $request->input('text');
        $operation = $request->input('operation');

        if ($operation == 'encrypt') {
            $result = $this->caesarCipher($text, $shift, 'encrypt');
        } elseif ($operation == 'decrypt') {
            $result = $this->caesarCipher($text, $shift, 'decrypt');
        } else {
            // Handle invalid operation
            return redirect('/caesar-cipher')->with('error', 'Invalid operation selected.');
        }

        return view('caesar-cipher.result', compact('text', 'result', 'shift'));
    }

    private function caesarCipher($text, $shift, $action)
    {
        $result = '';

        foreach (str_split($text) as $char) {
            if (ctype_alpha($char)) {
                $asciiOffset = ctype_upper($char) ? 65 : 97;
                $result .= chr(($action == 'encrypt' ? ord($char) + $shift : ord($char) - $shift - $asciiOffset + 26) % 26 + $asciiOffset);
            } else {
                $result .= $char;
            }
        }

        return $result;
    }
}
